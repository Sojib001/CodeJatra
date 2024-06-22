<?php
    // Include database connection
    include("db_conn.php");

    // Handle passed from JavaScript
    $handle = $_GET['handle'];

    // Array of tags/categories you are interested in
    $categories = array('graphs','brute force', 'greedy', 'implementation', 'math', 'data structures', 'dp', 'constructive algorithms');

    // Initialize data array
    $data = array(
        'labels' => array(),
        'datasets' => array(
            array(
                'data' => array(),
                'backgroundColor' => array()
            )
        )
    );

    // Prepare placeholders for categories
    foreach ($categories as $category) {
        $data['labels'][] = $category;
        $data['datasets'][0]['data'][] = 0; // Initialize count to 0
        $data['datasets'][0]['backgroundColor'][] = getRandomColor(); // Generate random color
    }

    // Fetch data from problems table for the specified handle
    $query = "SELECT Tags, COUNT(*) AS Count FROM problems WHERE Solved_By='$handle' GROUP BY Tags";
    $result = mysqli_query($con, $query);

    // Populate data with actual counts
    while ($row = mysqli_fetch_assoc($result)) {
        $tags = explode(',', $row['Tags']);
        foreach ($tags as $tag) {
            if (in_array(trim($tag), $categories)) {
                $index = array_search(trim($tag), $categories);
                $data['datasets'][0]['data'][$index] += (int)$row['Count'];
            }
        }
    }

    // Output JSON format
    echo json_encode($data);

    // Function to generate random color (optional)
    function getRandomColor() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
?>
