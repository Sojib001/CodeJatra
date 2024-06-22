-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 11:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip project`
--

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `Name` varchar(100) NOT NULL,
  `Solved_By` varchar(150) NOT NULL,
  `Problem_ID` varchar(50) NOT NULL,
  `Link` varchar(150) NOT NULL,
  `Rating` int(15) NOT NULL,
  `Tags` varchar(100) NOT NULL,
  `Solved` int(10) NOT NULL,
  `Attempted` int(10) NOT NULL,
  `Last_Update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`Name`, `Solved_By`, `Problem_ID`, `Link`, `Rating`, `Tags`, `Solved`, `Attempted`, `Last_Update`) VALUES
('Cooking Time', '-is-this-dft_', '101498F', 'https://codeforces.com/problemset/problem/101498/F', 0, '', 0, 3, '1680443994'),
('Sakally Soldier', '-is-this-dft_', '103158A', 'https://codeforces.com/problemset/problem/103158/A', 0, '', 1, 1, '1681582237'),
('Chocolates', '-is-this-dft_', '1139B', 'https://codeforces.com/problemset/problem/1139/B', 1000, 'greedy,implementation', 1, 3, '1681580002'),
('Lawnmower', '-is-this-dft_', '115B', 'https://codeforces.com/problemset/problem/115/B', 1500, 'greedy,sortings', 1, 6, '1683901386'),
('Cover it!', '-is-this-dft_', '1176E', 'https://codeforces.com/problemset/problem/1176/E', 1700, 'dfs and similar,dsu,graphs,shortest paths,trees', 1, 2, '1680789837'),
('The Doctor Meets Vader (Easy)', '-is-this-dft_', '1184B1', 'https://codeforces.com/problemset/problem/1184/B1', 1400, 'binary search,sortings', 1, 3, '1680113704'),
('Spiders', '-is-this-dft_', '120F', 'https://codeforces.com/problemset/problem/120/F', 1400, 'dp,greedy,trees', 1, 1, '1678883570'),
('Just Eat It!', '-is-this-dft_', '1285B', 'https://codeforces.com/problemset/problem/1285/B', 1300, 'dp,greedy,implementation', 1, 3, '1678870351'),
('Maximum White Subtree', '-is-this-dft_', '1324F', 'https://codeforces.com/problemset/problem/1324/F', 1800, 'dfs and similar,dp,graphs,trees', 1, 1, '1681060835'),
('Special Elements', '-is-this-dft_', '1352E', 'https://codeforces.com/problemset/problem/1352/E', 1500, 'brute force,implementation,two pointers', 1, 4, '1679499093'),
('Ternary String', '-is-this-dft_', '1354B', 'https://codeforces.com/problemset/problem/1354/B', 1200, 'binary search,dp,implementation,two pointers', 1, 1, '1681036350'),
('Subsequence Hate', '-is-this-dft_', '1363B', 'https://codeforces.com/problemset/problem/1363/B', 1400, 'implementation,strings', 1, 1, '1678846862'),
('Prefix Flip (Easy Version)', '-is-this-dft_', '1381A1', 'https://codeforces.com/problemset/problem/1381/A1', 1300, 'constructive algorithms,data structures,strings', 1, 1, '1680118773'),
('Prefix Flip (Hard Version)', '-is-this-dft_', '1381A2', 'https://codeforces.com/problemset/problem/1381/A2', 1700, 'constructive algorithms,data structures,implementation,strings,two pointers', 1, 1, '1680121634'),
('Nice Matrix', '-is-this-dft_', '1422B', 'https://codeforces.com/problemset/problem/1422/B', 1300, 'greedy,implementation,math', 1, 7, '1683901453'),
('Non-zero Segments', '-is-this-dft_', '1426D', 'https://codeforces.com/problemset/problem/1426/D', 1500, 'constructive algorithms,data structures,greedy,sortings', 1, 1, '1680023764'),
('Binary Search', '-is-this-dft_', '1436C', 'https://codeforces.com/problemset/problem/1436/C', 1500, 'binary search,combinatorics', 1, 1, '1682495660'),
('Plus and Multiply', '-is-this-dft_', '1542B', 'https://codeforces.com/problemset/problem/1542/B', 1500, 'constructive algorithms,math,number theory', 1, 2, '1680962117'),
('Mocha and Hiking', '-is-this-dft_', '1559C', 'https://codeforces.com/problemset/problem/1559/C', 1200, 'constructive algorithms,graphs', 1, 4, '1694104569'),
('Delete Two Elements', '-is-this-dft_', '1598C', 'https://codeforces.com/problemset/problem/1598/C', 1200, 'data structures,dp,implementation,math,two pointers', 1, 5, '1684219641'),
('XOR Specia-LIS-t', '-is-this-dft_', '1604B', 'https://codeforces.com/problemset/problem/1604/B', 1100, '', 1, 1, '1681577993'),
('Chat Ban', '-is-this-dft_', '1612C', 'https://codeforces.com/problemset/problem/1612/C', 1300, 'binary search,math', 1, 1, '1679308555'),
('String Building', '-is-this-dft_', '1671A', 'https://codeforces.com/problemset/problem/1671/A', 800, 'implementation', 1, 2, '1650641310'),
('Consecutive Points Segment', '-is-this-dft_', '1671B', 'https://codeforces.com/problemset/problem/1671/B', 1000, 'brute force,math,sortings', 1, 4, '1650643490'),
('I love AAAB', '-is-this-dft_', '1672B', 'https://codeforces.com/problemset/problem/1672/B', 800, 'constructive algorithms,implementation', 1, 5, '1683901767'),
('Number Transformation', '-is-this-dft_', '1674A', 'https://codeforces.com/problemset/problem/1674/A', 800, 'constructive algorithms,math', 1, 1, '1651508444'),
('Dictionary', '-is-this-dft_', '1674B', 'https://codeforces.com/problemset/problem/1674/B', 800, 'combinatorics,math', 1, 2, '1651508564'),
('Food for Animals', '-is-this-dft_', '1675A', 'https://codeforces.com/problemset/problem/1675/A', 800, 'greedy,math', 1, 2, '1651762128'),
('Digit Minimization', '-is-this-dft_', '1684A', 'https://codeforces.com/problemset/problem/1684/A', 800, 'constructive algorithms,games,math,strings', 1, 2, '1653884722'),
('Everything Everywhere All But One', '-is-this-dft_', '1686A', 'https://codeforces.com/problemset/problem/1686/A', 800, 'greedy', 1, 1, '1653886924'),
('Beat The Odds', '-is-this-dft_', '1691A', 'https://codeforces.com/problemset/problem/1691/A', 800, 'brute force,greedy,math', 1, 1, '1654009483'),
('Directional Increase', '-is-this-dft_', '1693A', 'https://codeforces.com/problemset/problem/1693/A', 1300, 'greedy', 0, 2, '1684218768'),
('Creep', '-is-this-dft_', '1694A', 'https://codeforces.com/problemset/problem/1694/A', 800, 'greedy,implementation', 1, 2, '1683901756'),
('Subrectangle Guess', '-is-this-dft_', '1695A', 'https://codeforces.com/problemset/problem/1695/A', 800, 'games', 0, 4, '1655567310'),
('3SUM Closure', '-is-this-dft_', '1698C', 'https://codeforces.com/problemset/problem/1698/C', 1300, 'brute force,data structures', 1, 7, '1676895925'),
('Luke is a Foodie', '-is-this-dft_', '1704B', 'https://codeforces.com/problemset/problem/1704/B', 1000, 'brute force,greedy,implementation', 1, 3, '1683901725'),
('Crossmarket', '-is-this-dft_', '1715A', 'https://codeforces.com/problemset/problem/1715/A', 800, 'constructive algorithms,greedy,math', 1, 1, '1661007176'),
('Beautiful Array', '-is-this-dft_', '1715B', 'https://codeforces.com/problemset/problem/1715/B', 1000, 'constructive algorithms,greedy,math', 1, 6, '1683901699'),
('Mainak and Array', '-is-this-dft_', '1726A', 'https://codeforces.com/problemset/problem/1726/A', 900, 'greedy,math', 1, 5, '1683901689'),
('Best Permutation', '-is-this-dft_', '1728B', 'https://codeforces.com/problemset/problem/1728/B', 800, 'constructive algorithms,greedy', 1, 2, '1682422626'),
('Digital Logarithm', '-is-this-dft_', '1728C', 'https://codeforces.com/problemset/problem/1728/C', 1400, 'data structures,greedy,sortings', 1, 1, '1682420495'),
('Planets', '-is-this-dft_', '1730A', 'https://codeforces.com/problemset/problem/1730/A', 800, 'data structures,greedy,sortings', 1, 1, '1664116883'),
('Minimum Notation', '-is-this-dft_', '1730C', 'https://codeforces.com/problemset/problem/1730/C', 1200, 'data structures,greedy,math,sortings', 1, 1, '1664122698'),
('Even Subarrays', '-is-this-dft_', '1731C', 'https://codeforces.com/problemset/problem/1731/C', 1700, 'bitmasks,brute force,hashing,math,number theory', 1, 3, '1679066704'),
('Ela Sorting Books', '-is-this-dft_', '1737A', 'https://codeforces.com/problemset/problem/1737/A', 900, 'greedy,implementation,strings', 1, 2, '1665157324'),
('Prefix Sum Addicts', '-is-this-dft_', '1738B', 'https://codeforces.com/problemset/problem/1738/B', 1200, 'constructive algorithms,greedy,math,sortings', 1, 2, '1683901653'),
('Factorise N+M', '-is-this-dft_', '1740A', 'https://codeforces.com/problemset/problem/1740/A', 800, 'constructive algorithms,number theory', 1, 3, '1667035189'),
('Jumbo Extra Cheese 2', '-is-this-dft_', '1740B', 'https://codeforces.com/problemset/problem/1740/B', 800, 'geometry,greedy,sortings', 1, 1, '1667039232'),
('Bricks and Bags', '-is-this-dft_', '1740C', 'https://codeforces.com/problemset/problem/1740/C', 1400, 'constructive algorithms,games,greedy,sortings', 1, 4, '1683901603'),
('Maxmina', '-is-this-dft_', '1746A', 'https://codeforces.com/problemset/problem/1746/A', 800, 'constructive algorithms,greedy', 1, 1, '1665844764'),
('The Ultimate Square', '-is-this-dft_', '1748A', 'https://codeforces.com/problemset/problem/1748/A', 800, 'math', 1, 1, '1668264019'),
('Cowardly Rooks', '-is-this-dft_', '1749A', 'https://codeforces.com/problemset/problem/1749/A', 800, 'greedy,implementation', 1, 1, '1666277162'),
('Death\'s Blessing', '-is-this-dft_', '1749B', 'https://codeforces.com/problemset/problem/1749/B', 900, 'greedy', 1, 1, '1666277895'),
('Number Game', '-is-this-dft_', '1749C', 'https://codeforces.com/problemset/problem/1749/C', 1400, 'binary search,data structures,games,greedy,implementation', 0, 5, '1666283888'),
('Indirect Sort', '-is-this-dft_', '1750A', 'https://codeforces.com/problemset/problem/1750/A', 800, 'constructive algorithms,implementation,math', 1, 2, '1668091954'),
('Maximum Substring', '-is-this-dft_', '1750B', 'https://codeforces.com/problemset/problem/1750/B', 800, 'brute force,greedy,implementation', 1, 3, '1683901565'),
('Complementary XOR', '-is-this-dft_', '1750C', 'https://codeforces.com/problemset/problem/1750/C', 1400, 'constructive algorithms,implementation', 1, 2, '1709037860'),
('Technical Support', '-is-this-dft_', '1754A', 'https://codeforces.com/problemset/problem/1754/A', 800, 'greedy', 1, 3, '1666512511'),
('Kevin and Permutation', '-is-this-dft_', '1754B', 'https://codeforces.com/problemset/problem/1754/B', 800, 'constructive algorithms,greedy,math', 1, 5, '1683901618'),
('SSeeeeiinngg DDoouubbllee', '-is-this-dft_', '1758A', 'https://codeforces.com/problemset/problem/1758/A', 800, 'constructive algorithms,strings', 1, 1, '1669390676'),
('XOR = Average', '-is-this-dft_', '1758B', 'https://codeforces.com/problemset/problem/1758/B', 900, 'constructive algorithms', 1, 1, '1669392252'),
('Almost All Multiples', '-is-this-dft_', '1758C', 'https://codeforces.com/problemset/problem/1758/C', 1400, 'greedy,number theory', 0, 8, '1669395048'),
('The Humanoid', '-is-this-dft_', '1759E', 'https://codeforces.com/problemset/problem/1759/E', 1500, 'brute force,dp,sortings', 1, 1, '1678969751'),
('Medium Number', '-is-this-dft_', '1760A', 'https://codeforces.com/problemset/problem/1760/A', 800, 'implementation,sortings', 1, 2, '1669041422'),
('Atilla\'s Favorite Problem', '-is-this-dft_', '1760B', 'https://codeforces.com/problemset/problem/1760/B', 800, 'greedy,implementation,strings', 1, 1, '1669041596'),
('Advantage', '-is-this-dft_', '1760C', 'https://codeforces.com/problemset/problem/1760/C', 800, 'data structures,implementation,sortings', 1, 5, '1669046890'),
('Challenging Valleys', '-is-this-dft_', '1760D', 'https://codeforces.com/problemset/problem/1760/D', 1000, 'implementation,two pointers', 1, 1, '1669042279'),
('Binary Inversions', '-is-this-dft_', '1760E', 'https://codeforces.com/problemset/problem/1760/E', 1100, 'data structures,greedy,math', 1, 8, '1681061235'),
('Quests', '-is-this-dft_', '1760F', 'https://codeforces.com/problemset/problem/1760/F', 1500, 'binary search,greedy,sortings', 1, 6, '1682457337'),
('SlavicG\'s Favorite Problem', '-is-this-dft_', '1760G', 'https://codeforces.com/problemset/problem/1760/G', 1700, 'bitmasks,dfs and similar,graphs', 1, 5, '1681069369'),
('Two Permutations', '-is-this-dft_', '1761A', 'https://codeforces.com/problemset/problem/1761/A', 800, 'brute force,constructive algorithms', 1, 3, '1668955891'),
('Elimination of a Ring', '-is-this-dft_', '1761B', 'https://codeforces.com/problemset/problem/1761/B', 1000, 'constructive algorithms,greedy,implementation', 1, 1, '1668959073'),
('Doremy\'s Paint', '-is-this-dft_', '1764A', 'https://codeforces.com/problemset/problem/1764/A', 800, 'greedy', 1, 1, '1669473914'),
('Doremy\'s Perfect Math Class', '-is-this-dft_', '1764B', 'https://codeforces.com/problemset/problem/1764/B', 900, 'math,number theory', 1, 2, '1669474691'),
('Greatest Convex', '-is-this-dft_', '1768A', 'https://codeforces.com/problemset/problem/1768/A', 800, 'greedy,math,number theory', 1, 1, '1672940031'),
('Koxia and Whiteboards', '-is-this-dft_', '1770A', 'https://codeforces.com/problemset/problem/1770/A', 1000, 'brute force,greedy', 1, 3, '1672413016'),
('Koxia and Permutation', '-is-this-dft_', '1770B', 'https://codeforces.com/problemset/problem/1770/B', 1000, 'constructive algorithms', 1, 3, '1672414277'),
('Flip Flop Sum', '-is-this-dft_', '1778A', 'https://codeforces.com/problemset/problem/1778/A', 800, 'greedy,implementation', 1, 1, '1675262366'),
('Hall of Fame', '-is-this-dft_', '1779A', 'https://codeforces.com/problemset/problem/1779/A', 800, 'constructive algorithms,greedy,strings', 1, 1, '1672757660'),
('MKnez\'s ConstructiveForces Task', '-is-this-dft_', '1779B', 'https://codeforces.com/problemset/problem/1779/B', 900, 'constructive algorithms,math', 1, 5, '1683901534'),
('Serval and Mocha\'s Array', '-is-this-dft_', '1789A', 'https://codeforces.com/problemset/problem/1789/A', 800, 'brute force,math,number theory', 1, 2, '1683901418'),
('Serval and Inversion Magic', '-is-this-dft_', '1789B', 'https://codeforces.com/problemset/problem/1789/B', 800, 'brute force,implementation,strings,two pointers', 1, 2, '1677337245'),
('Codeforces Checking', '-is-this-dft_', '1791A', 'https://codeforces.com/problemset/problem/1791/A', 800, 'implementation,strings', 1, 1, '1675435151'),
('Following Directions', '-is-this-dft_', '1791B', 'https://codeforces.com/problemset/problem/1791/B', 800, 'geometry,implementation', 1, 1, '1675435335'),
('Prepend and Append', '-is-this-dft_', '1791C', 'https://codeforces.com/problemset/problem/1791/C', 800, 'implementation,two pointers', 1, 1, '1675435526'),
('Distinct Split', '-is-this-dft_', '1791D', 'https://codeforces.com/problemset/problem/1791/D', 1000, 'brute force,greedy,strings', 1, 7, '1683901499'),
('Negatives and Positives', '-is-this-dft_', '1791E', 'https://codeforces.com/problemset/problem/1791/E', 1100, 'dp,greedy,sortings', 1, 1, '1675437361'),
('Teleporters (Easy Version)', '-is-this-dft_', '1791G1', 'https://codeforces.com/problemset/problem/1791/G1', 1100, 'greedy,sortings', 1, 1, '1675440451'),
('Typical Interview Problem', '-is-this-dft_', '1796A', 'https://codeforces.com/problemset/problem/1796/A', 800, 'brute force,implementation,strings', 1, 3, '1677595885'),
('Asterisk-Minor Template', '-is-this-dft_', '1796B', 'https://codeforces.com/problemset/problem/1796/B', 1000, 'implementation,strings', 1, 1, '1677597630'),
('Li Hua and Maze', '-is-this-dft_', '1797A', 'https://codeforces.com/problemset/problem/1797/A', 800, 'constructive algorithms,flows,graphs,greedy,implementation', 1, 1, '1680963591'),
('Li Hua and Pattern', '-is-this-dft_', '1797B', 'https://codeforces.com/problemset/problem/1797/B', 1100, 'constructive algorithms,greedy', 1, 6, '1680968111'),
('Recent Actions', '-is-this-dft_', '1799A', 'https://codeforces.com/problemset/problem/1799/A', 800, 'data structures,greedy,implementation,math', 1, 1, '1677509294'),
('Equalize by Divide', '-is-this-dft_', '1799B', 'https://codeforces.com/problemset/problem/1799/B', 1200, 'brute force,constructive algorithms,greedy,math', 1, 2, '1677513237'),
('Is It a Cat?', '-is-this-dft_', '1800A', 'https://codeforces.com/problemset/problem/1800/A', 800, 'implementation,strings', 1, 2, '1677768917'),
('Count the Number of Pairs', '-is-this-dft_', '1800B', 'https://codeforces.com/problemset/problem/1800/B', 1000, 'greedy,strings', 1, 2, '1677769755'),
('Powering the Hero (easy version)', '-is-this-dft_', '1800C1', 'https://codeforces.com/problemset/problem/1800/C1', 1000, 'data structures,greedy', 1, 2, '1677772985'),
('Powering the Hero (hard version)', '-is-this-dft_', '1800C2', 'https://codeforces.com/problemset/problem/1800/C2', 1100, 'data structures,greedy', 1, 1, '1677773009'),
('Remove Two Letters', '-is-this-dft_', '1800D', 'https://codeforces.com/problemset/problem/1800/D', 1200, 'data structures,greedy,hashing,strings', 1, 1, '1677775435'),
('Vaccination', '-is-this-dft_', '1804B', 'https://codeforces.com/problemset/problem/1804/B', 1000, 'greedy,implementation', 1, 8, '1678796459'),
('Pull Your Luck', '-is-this-dft_', '1804C', 'https://codeforces.com/problemset/problem/1804/C', 1500, 'brute force,greedy,math,number theory', 1, 2, '1678796348'),
('Plus or Minus', '-is-this-dft_', '1807A', 'https://codeforces.com/problemset/problem/1807/A', 800, 'implementation', 1, 1, '1679237851'),
('Grab the Candies', '-is-this-dft_', '1807B', 'https://codeforces.com/problemset/problem/1807/B', 800, 'greedy', 1, 1, '1679238038'),
('Find and Replace', '-is-this-dft_', '1807C', 'https://codeforces.com/problemset/problem/1807/C', 800, 'greedy,implementation,strings', 1, 1, '1679238650'),
('Odd Queries', '-is-this-dft_', '1807D', 'https://codeforces.com/problemset/problem/1807/D', 900, 'data structures,implementation', 1, 1, '1679240173'),
('Interview', '-is-this-dft_', '1807E', 'https://codeforces.com/problemset/problem/1807/E', 1300, 'binary search,implementation,interactive', 1, 2, '1679380209'),
('Beautiful Sequence', '-is-this-dft_', '1810A', 'https://codeforces.com/problemset/problem/1810/A', 800, 'brute force,greedy', 1, 1, '1680617728'),
('Candies', '-is-this-dft_', '1810B', 'https://codeforces.com/problemset/problem/1810/B', 800, 'constructive algorithms,math,number theory', 1, 1, '1680618677'),
('Insert Digit', '-is-this-dft_', '1811A', 'https://codeforces.com/problemset/problem/1811/A', 800, 'greedy,math,strings', 1, 2, '1680619277'),
('Conveyor Belts', '-is-this-dft_', '1811B', 'https://codeforces.com/problemset/problem/1811/B', 1000, 'implementation,math', 1, 1, '1680620253'),
('Restore the Array', '-is-this-dft_', '1811C', 'https://codeforces.com/problemset/problem/1811/C', 1100, 'constructive algorithms,greedy', 1, 5, '1683901315'),
('Coins', '-is-this-dft_', '1814A', 'https://codeforces.com/problemset/problem/1814/A', 800, 'implementation,math', 1, 1, '1680792121'),
('Long Legs', '-is-this-dft_', '1814B', 'https://codeforces.com/problemset/problem/1814/B', 1700, 'brute force,math', 0, 1, '1680793728'),
('Constructive Problem', '-is-this-dft_', '1820C', 'https://codeforces.com/problemset/problem/1820/C', 1300, 'constructive algorithms,greedy', 1, 7, '1682286456'),
('Making Anti-Palindromes', '-is-this-dft_', '1822E', 'https://codeforces.com/problemset/problem/1822/E', 1600, 'greedy,math,strings', 1, 4, '1682438156'),
('A-characteristic', '-is-this-dft_', '1823A', 'https://codeforces.com/problemset/problem/1823/A', 800, 'combinatorics,constructive algorithms,math', 1, 1, '1682607179'),
('Sort with Step', '-is-this-dft_', '1823B', 'https://codeforces.com/problemset/problem/1823/B', 900, 'brute force,math,sortings', 1, 1, '1682607616'),
('Strongly Composite', '-is-this-dft_', '1823C', 'https://codeforces.com/problemset/problem/1823/C', 1300, 'greedy,math,number theory', 1, 1, '1682613165'),
('LuoTianyi and the Show', '-is-this-dft_', '1825C', 'https://codeforces.com/problemset/problem/1825/C', 1400, 'greedy,sortings', 1, 1, '1683900810'),
('Divisible Array', '-is-this-dft_', '1828A', 'https://codeforces.com/problemset/problem/1828/A', 800, 'constructive algorithms,math', 1, 1, '1684075149'),
('Permutation Swap', '-is-this-dft_', '1828B', 'https://codeforces.com/problemset/problem/1828/B', 900, 'math,number theory', 1, 3, '1684076369'),
('Counting Orders', '-is-this-dft_', '1828C', 'https://codeforces.com/problemset/problem/1828/C', 1100, 'binary search,combinatorics,sortings', 1, 1, '1684077694'),
('Love Story', '-is-this-dft_', '1829A', 'https://codeforces.com/problemset/problem/1829/A', 800, 'implementation,strings', 1, 1, '1683383820'),
('Blank Space', '-is-this-dft_', '1829B', 'https://codeforces.com/problemset/problem/1829/B', 800, 'implementation', 1, 1, '1683383946'),
('Mr. Perfectly Fine', '-is-this-dft_', '1829C', 'https://codeforces.com/problemset/problem/1829/C', 800, 'bitmasks,greedy,implementation', 1, 1, '1683384337'),
('Gold Rush', '-is-this-dft_', '1829D', 'https://codeforces.com/problemset/problem/1829/D', 1000, 'brute force,dfs and similar,dp,implementation', 1, 2, '1683385552'),
('The Lakes', '-is-this-dft_', '1829E', 'https://codeforces.com/problemset/problem/1829/E', 1100, 'dfs and similar,dsu,graphs,implementation', 1, 1, '1683386066'),
('Forever Winter', '-is-this-dft_', '1829F', 'https://codeforces.com/problemset/problem/1829/F', 1300, 'dfs and similar,graphs,math', 1, 1, '1683388456'),
('New Palindrome', '-is-this-dft_', '1832A', 'https://codeforces.com/problemset/problem/1832/A', 800, 'strings', 1, 1, '1683904440'),
('Maximum Sum', '-is-this-dft_', '1832B', 'https://codeforces.com/problemset/problem/1832/B', 1100, 'brute force,sortings,two pointers', 0, 3, '1683904114'),
('Contrast Value', '-is-this-dft_', '1832C', 'https://codeforces.com/problemset/problem/1832/C', 1200, 'greedy,implementation', 1, 6, '1683912987'),
('Game with Reversing', '-is-this-dft_', '1834C', 'https://codeforces.com/problemset/problem/1834/C', 1200, 'games,greedy,math,strings', 0, 1, '1687973421'),
('Tenzing and Tsondu', '-is-this-dft_', '1842A', 'https://codeforces.com/problemset/problem/1842/A', 800, 'games,math', 1, 1, '1687615887'),
('Tenzing and Books', '-is-this-dft_', '1842B', 'https://codeforces.com/problemset/problem/1842/B', 1100, 'bitmasks,greedy,math', 1, 1, '1687617942'),
('Tenzing and Balls', '-is-this-dft_', '1842C', 'https://codeforces.com/problemset/problem/1842/C', 1500, 'dp', 0, 1, '1687620992'),
('We Were Both Children', '-is-this-dft_', '1850F', 'https://codeforces.com/problemset/problem/1850/F', 1300, 'brute force,implementation,math,number theory', 0, 4, '1690533400'),
('XOR Palindromes', '-is-this-dft_', '1867B', 'https://codeforces.com/problemset/problem/1867/B', 1100, 'bitmasks,constructive algorithms,strings', 1, 2, '1695830718'),
('Odd One Out', '-is-this-dft_', '1915A', 'https://codeforces.com/problemset/problem/1915/A', 800, 'bitmasks,implementation', 1, 1, '1703774253'),
('Not Quite Latin Square', '-is-this-dft_', '1915B', 'https://codeforces.com/problemset/problem/1915/B', 800, 'bitmasks,brute force,implementation', 1, 1, '1703774541'),
('Can I Square?', '-is-this-dft_', '1915C', 'https://codeforces.com/problemset/problem/1915/C', 800, 'binary search,implementation', 1, 5, '1703778117'),
('Unnatural Language Processing', '-is-this-dft_', '1915D', 'https://codeforces.com/problemset/problem/1915/D', 900, 'greedy,implementation,strings', 1, 1, '1703777785'),
('Romantic Glasses', '-is-this-dft_', '1915E', 'https://codeforces.com/problemset/problem/1915/E', 1300, 'data structures,greedy,math', 1, 2, '1703779170'),
('Vlad and the Best of Five', '-is-this-dft_', '1926A', 'https://codeforces.com/problemset/problem/1926/A', 800, 'implementation', 1, 1, '1708353401'),
('Vlad and Shapes', '-is-this-dft_', '1926B', 'https://codeforces.com/problemset/problem/1926/B', 800, 'geometry,implementation', 1, 1, '1708353678'),
('Vlad and a Sum of Sum of Digits', '-is-this-dft_', '1926C', 'https://codeforces.com/problemset/problem/1926/C', 1200, 'dp,implementation', 1, 1, '1708353952'),
('Vlad and Division', '-is-this-dft_', '1926D', 'https://codeforces.com/problemset/problem/1926/D', 1300, 'bitmasks,greedy', 1, 1, '1708355738'),
('Vlad and an Odd Ordering', '-is-this-dft_', '1926E', 'https://codeforces.com/problemset/problem/1926/E', 1500, 'binary search,bitmasks,data structures,dp,implementation,math,number theory', 1, 1, '1708358805'),
('Make it White', '-is-this-dft_', '1927A', 'https://codeforces.com/problemset/problem/1927/A', 800, 'greedy,strings', 1, 1, '1707231196'),
('Following the String', '-is-this-dft_', '1927B', 'https://codeforces.com/problemset/problem/1927/B', 900, 'constructive algorithms,greedy,strings', 1, 1, '1707231530'),
('Choose the Different Ones!', '-is-this-dft_', '1927C', 'https://codeforces.com/problemset/problem/1927/C', 1000, 'brute force,greedy,math', 1, 1, '1707232367'),
('Find the Different Ones!', '-is-this-dft_', '1927D', 'https://codeforces.com/problemset/problem/1927/D', 1300, 'binary search,brute force,data structures,dp,dsu,greedy,two pointers', 1, 4, '1707236867'),
('Thorns and Coins', '-is-this-dft_', '1932A', 'https://codeforces.com/problemset/problem/1932/A', 800, 'dp,greedy,implementation', 1, 1, '1708258142'),
('Chaya Calendar', '-is-this-dft_', '1932B', 'https://codeforces.com/problemset/problem/1932/B', 1100, 'number theory', 0, 1, '1708258984'),
('LR-remainders', '-is-this-dft_', '1932C', 'https://codeforces.com/problemset/problem/1932/C', 1400, 'brute force,data structures,implementation,math,two pointers', 1, 7, '1708261153'),
('Card Game', '-is-this-dft_', '1932D', 'https://codeforces.com/problemset/problem/1932/D', 1400, 'greedy,implementation', 1, 4, '1708264305'),
('Phone Desktop', '-is-this-dft_', '1974A', 'https://codeforces.com/problemset/problem/1974/A', 800, 'greedy,math', 1, 2, '1716216273'),
('Symmetric Encoding', '-is-this-dft_', '1974B', 'https://codeforces.com/problemset/problem/1974/B', 800, 'implementation,sortings,strings', 1, 1, '1716216750'),
('Beautiful Triple Pairs', '-is-this-dft_', '1974C', 'https://codeforces.com/problemset/problem/1974/C', 1400, 'combinatorics,data structures', 1, 2, '1717136165'),
('Ingenuity-2', '-is-this-dft_', '1974D', 'https://codeforces.com/problemset/problem/1974/D', 1400, 'constructive algorithms,greedy,implementation', 0, 1, '1716223760'),
('Renting Bikes', '-is-this-dft_', '363D', 'https://codeforces.com/problemset/problem/363/D', 1800, 'binary search,greedy', 1, 1, '1680502547'),
('Domino Effect', '-is-this-dft_', '405B', 'https://codeforces.com/problemset/problem/405/B', 1100, '', 0, 2, '1678899426'),
('Martian Dollar', '-is-this-dft_', '41B', 'https://codeforces.com/problemset/problem/41/B', 1400, 'brute force', 1, 3, '1681039509'),
('Jzzhu and Sequences', '-is-this-dft_', '450B', 'https://codeforces.com/problemset/problem/450/B', 1300, 'implementation,math', 1, 8, '1678899448'),
('Calculating Function', '-is-this-dft_', '486A', 'https://codeforces.com/problemset/problem/486/A', 800, 'implementation,math', 1, 4, '1669402665'),
('Team Olympiad', '-is-this-dft_', '490A', 'https://codeforces.com/problemset/problem/490/A', 800, 'greedy,implementation,sortings', 1, 1, '1664558753'),
('Marina and Vasya', '-is-this-dft_', '584C', 'https://codeforces.com/problemset/problem/584/C', 1700, 'constructive algorithms,greedy,strings', 1, 4, '1679751536'),
('Longest k-Good Segment', '-is-this-dft_', '616D', 'https://codeforces.com/problemset/problem/616/D', 1600, 'binary search,data structures,two pointers', 1, 3, '1680030775'),
('Hard Process', '-is-this-dft_', '660C', 'https://codeforces.com/problemset/problem/660/C', 1600, 'binary search,dp,two pointers', 1, 3, '1680000621'),
('Alyona and Mex', '-is-this-dft_', '682B', 'https://codeforces.com/problemset/problem/682/B', 1200, 'sortings', 1, 1, '1679721739'),
('Vacations', '-is-this-dft_', '698A', 'https://codeforces.com/problemset/problem/698/A', 1400, 'dp', 1, 1, '1667914870'),
('Curriculum Vitae', '-is-this-dft_', '846A', 'https://codeforces.com/problemset/problem/846/A', 1500, 'brute force,implementation', 1, 2, '1678779339'),
('Two-gram', '-is-this-dft_', '977B', 'https://codeforces.com/problemset/problem/977/B', 900, 'implementation,strings', 1, 2, '1679679526'),
('Remove Duplicates', '-is-this-dft_', '978A', 'https://codeforces.com/problemset/problem/978/A', 800, 'implementation', 1, 1, '1685463942'),
('File Name', '-is-this-dft_', '978B', 'https://codeforces.com/problemset/problem/978/B', 800, 'greedy,strings', 1, 2, '1685464397'),
('Letters', '-is-this-dft_', '978C', 'https://codeforces.com/problemset/problem/978/C', 1000, 'binary search,implementation,two pointers', 1, 1, '1685465073'),
('Delete from the Left', 'AJFaisal', '1005B', 'https://codeforces.com/problemset/problem/1005/B', 900, 'brute force,implementation,strings', 1, 1, '1696047001'),
('In Search of an Easy Problem', 'AJFaisal', '1030A', 'https://codeforces.com/problemset/problem/1030/A', 800, 'implementation', 1, 1, '1661590567'),
('Cover Points', 'AJFaisal', '1047B', 'https://codeforces.com/problemset/problem/1047/B', 900, 'geometry,math', 1, 1, '1696047059'),
('Blackjack', 'AJFaisal', '104A', 'https://codeforces.com/problemset/problem/104/A', 800, 'implementation', 1, 5, '1688594550'),
('Card Game', 'AJFaisal', '106A', 'https://codeforces.com/problemset/problem/106/A', 1000, 'implementation', 1, 4, '1708217393'),
('Margarite and the best present', 'AJFaisal', '1080B', 'https://codeforces.com/problemset/problem/1080/B', 900, 'math', 1, 4, '1695931644'),
('Ehab and subtraction', 'AJFaisal', '1088B', 'https://codeforces.com/problemset/problem/1088/B', 1000, 'implementation,sortings', 1, 1, '1698941846'),
('Palindromic Times', 'AJFaisal', '108A', 'https://codeforces.com/problemset/problem/108/A', 1000, 'implementation,strings', 1, 1, '1708059837'),
('Teams Forming', 'AJFaisal', '1092B', 'https://codeforces.com/problemset/problem/1092/B', 800, 'sortings', 1, 3, '1684428790'),
('Letters Rearranging', 'AJFaisal', '1093B', 'https://codeforces.com/problemset/problem/1093/B', 900, 'constructive algorithms,greedy,sortings,strings', 1, 1, '1695927369'),
('Array Stabilization', 'AJFaisal', '1095B', 'https://codeforces.com/problemset/problem/1095/B', 900, 'implementation', 1, 2, '1695745283'),
('NN and the Optical Illusion', 'AJFaisal', '1100C', 'https://codeforces.com/problemset/problem/1100/C', 1200, 'binary search,geometry,math', 0, 1, '1684432873'),
('Digital root', 'AJFaisal', '1107B', 'https://codeforces.com/problemset/problem/1107/B', 1000, 'math,number theory', 1, 1, '1698937606'),
('Nearly Lucky Number', 'AJFaisal', '110A', 'https://codeforces.com/problemset/problem/110/A', 800, 'implementation', 1, 5, '1660053526'),
('Emotes', 'AJFaisal', '1117B', 'https://codeforces.com/problemset/problem/1117/B', 1000, 'greedy,math,sortings', 1, 1, '1698826959'),
('Petya and Strings', 'AJFaisal', '112A', 'https://codeforces.com/problemset/problem/112/A', 800, 'implementation,strings', 1, 1, '1653301420'),
('Petya and Square', 'AJFaisal', '112B', 'https://codeforces.com/problemset/problem/112/B', 1200, 'implementation,math', 1, 1, '1706809958'),
('Nastya Is Playing Computer Games', 'AJFaisal', '1136B', 'https://codeforces.com/problemset/problem/1136/B', 1000, 'constructive algorithms,math', 1, 1, '1698817614'),
('Maximal Continuous Rest', 'AJFaisal', '1141B', 'https://codeforces.com/problemset/problem/1141/B', 900, 'implementation', 1, 3, '1695746234'),
('Parity Alternated Deletions', 'AJFaisal', '1144B', 'https://codeforces.com/problemset/problem/1144/B', 900, 'greedy,implementation,sortings', 1, 1, '1695662369'),
('Two Shuffled Sequences', 'AJFaisal', '1144C', 'https://codeforces.com/problemset/problem/1144/C', 1000, 'constructive algorithms,sortings', 1, 2, '1699527507'),
('Tiling Challenge', 'AJFaisal', '1150B', 'https://codeforces.com/problemset/problem/1150/B', 900, 'greedy,implementation', 1, 7, '1695491845'),
('Restoring Three Numbers', 'AJFaisal', '1154A', 'https://codeforces.com/problemset/problem/1154/A', 800, 'math', 1, 1, '1662392613'),
('Tram', 'AJFaisal', '116A', 'https://codeforces.com/problemset/problem/116/A', 800, 'implementation', 1, 2, '1688592739'),
('From Hero to Zero', 'AJFaisal', '1175A', 'https://codeforces.com/problemset/problem/1175/A', 900, 'implementation,math', 1, 2, '1668360066'),
('Merge it!', 'AJFaisal', '1176B', 'https://codeforces.com/problemset/problem/1176/B', 1100, 'math', 1, 2, '1671468325'),
('Equalize Prices', 'AJFaisal', '1183B', 'https://codeforces.com/problemset/problem/1183/B', 900, 'math', 1, 1, '1695459310'),
('String Task', 'AJFaisal', '118A', 'https://codeforces.com/problemset/problem/118/A', 1000, 'implementation,strings', 1, 2, '1671126654'),
('Present from Lena', 'AJFaisal', '118B', 'https://codeforces.com/problemset/problem/118/B', 1000, 'constructive algorithms,implementation', 1, 2, '1708062424'),
('Epic Game', 'AJFaisal', '119A', 'https://codeforces.com/problemset/problem/119/A', 800, 'implementation', 0, 2, '1688469316'),
('Make Product Equal One', 'AJFaisal', '1206B', 'https://codeforces.com/problemset/problem/1206/B', 900, 'dp,implementation', 1, 8, '1695408304'),
('Elevator', 'AJFaisal', '120A', 'https://codeforces.com/problemset/problem/120/A', 1000, 'brute force,implementation,math', 1, 1, '1708170242'),
('Quiz League', 'AJFaisal', '120B', 'https://codeforces.com/problemset/problem/120/B', 1100, 'implementation', 1, 1, '1708172939'),
('Shooting', 'AJFaisal', '1216B', 'https://codeforces.com/problemset/problem/1216/B', 900, 'greedy,implementation,sortings', 1, 1, '1695356666'),
('Lucky Array', 'AJFaisal', '121E', 'https://codeforces.com/problemset/problem/121/E', 2400, 'data structures', 0, 4, '1709545261'),
('Lucky Division', 'AJFaisal', '122A', 'https://codeforces.com/problemset/problem/122/A', 1000, 'brute force,number theory', 1, 2, '1708086095'),
('Ania and Minimizing', 'AJFaisal', '1230B', 'https://codeforces.com/problemset/problem/1230/B', 1000, 'greedy,implementation', 1, 4, '1697990420'),
('Grow The Tree', 'AJFaisal', '1248B', 'https://codeforces.com/problemset/problem/1248/B', 900, 'greedy,math,sortings', 1, 3, '1695297424'),
('Magic Stick', 'AJFaisal', '1257B', 'https://codeforces.com/problemset/problem/1257/B', 1000, 'math', 1, 1, '1698208383'),
('Dice Tower', 'AJFaisal', '1266B', 'https://codeforces.com/problemset/problem/1266/B', 1000, 'constructive algorithms,math', 1, 1, '1698247713'),
('New Year Garland', 'AJFaisal', '1279A', 'https://codeforces.com/problemset/problem/1279/A', 900, 'math', 1, 1, '1668342770'),
('Canvas Frames', 'AJFaisal', '127B', 'https://codeforces.com/problemset/problem/127/B', 1000, 'implementation', 0, 4, '1708220129'),
('Minutes Before the New Year', 'AJFaisal', '1283A', 'https://codeforces.com/problemset/problem/1283/A', 800, 'math', 1, 1, '1667842728'),
('Candies Division', 'AJFaisal', '1283B', 'https://codeforces.com/problemset/problem/1283/B', 900, 'math', 1, 1, '1667842162'),
('JOE is on TV!', 'AJFaisal', '1293B', 'https://codeforces.com/problemset/problem/1293/B', 1000, 'combinatorics,greedy,math', 1, 1, '1698249200'),
('Array with Odd Sum', 'AJFaisal', '1296A', 'https://codeforces.com/problemset/problem/1296/A', 800, 'math', 1, 3, '1664967243'),
('Food Buying', 'AJFaisal', '1296B', 'https://codeforces.com/problemset/problem/1296/B', 900, 'math', 1, 1, '1695230705'),
('Assigning to Classes', 'AJFaisal', '1300B', 'https://codeforces.com/problemset/problem/1300/B', 1000, 'greedy,implementation,sortings', 1, 1, '1696703521'),
('Bogosort', 'AJFaisal', '1312B', 'https://codeforces.com/problemset/problem/1312/B', 1000, 'constructive algorithms,sortings', 1, 1, '1684424922'),
('CopyCopyCopyCopyCopy', 'AJFaisal', '1325B', 'https://codeforces.com/problemset/problem/1325/B', 800, 'greedy,implementation', 1, 1, '1694241314'),
('Maximums', 'AJFaisal', '1326B', 'https://codeforces.com/problemset/problem/1326/B', 900, 'implementation,math', 1, 1, '1695144608'),
('Sum of Odd Integers', 'AJFaisal', '1327A', 'https://codeforces.com/problemset/problem/1327/A', 1100, 'math', 1, 4, '1672663370'),
('Divisibility Problem', 'AJFaisal', '1328A', 'https://codeforces.com/problemset/problem/1328/A', 800, 'math', 1, 3, '1661972259'),
('Middle Class', 'AJFaisal', '1334B', 'https://codeforces.com/problemset/problem/1334/B', 1100, 'greedy,sortings', 1, 2, '1671036543'),
('Candies and Two Sisters', 'AJFaisal', '1335A', 'https://codeforces.com/problemset/problem/1335/A', 800, 'math', 1, 1, '1662123892'),
('Construct the String', 'AJFaisal', '1335B', 'https://codeforces.com/problemset/problem/1335/B', 900, 'constructive algorithms', 1, 3, '1695143278'),
('Kana and Dragon Quest game', 'AJFaisal', '1337B', 'https://codeforces.com/problemset/problem/1337/B', 900, 'greedy,implementation,math', 1, 1, '1694765107'),
('HQ9+', 'AJFaisal', '133A', 'https://codeforces.com/problemset/problem/133/A', 900, 'implementation', 1, 3, '1666104297'),
('Square?', 'AJFaisal', '1351B', 'https://codeforces.com/problemset/problem/1351/B', 900, 'brute force,implementation,math', 1, 2, '1694630002'),
('Board Moves', 'AJFaisal', '1353C', 'https://codeforces.com/problemset/problem/1353/C', 1000, 'math', 1, 1, '1699510032'),
('Park Lighting', 'AJFaisal', '1358A', 'https://codeforces.com/problemset/problem/1358/A', 800, 'greedy,math', 1, 2, '1662941789'),
('Maria Breaks the Self-isolation', 'AJFaisal', '1358B', 'https://codeforces.com/problemset/problem/1358/B', 1000, 'greedy,sortings', 1, 1, '1696618513'),
('New Theatre Square', 'AJFaisal', '1359B', 'https://codeforces.com/problemset/problem/1359/B', 1000, 'brute force,dp,greedy,implementation,two pointers', 1, 1, '1696613867'),
('Honest Coach', 'AJFaisal', '1360B', 'https://codeforces.com/problemset/problem/1360/B', 800, 'greedy,sortings', 1, 1, '1694198801'),
('Short Substrings', 'AJFaisal', '1367A', 'https://codeforces.com/problemset/problem/1367/A', 800, 'implementation,strings', 1, 1, '1662552777'),
('Even Array', 'AJFaisal', '1367B', 'https://codeforces.com/problemset/problem/1367/B', 800, 'greedy,math', 1, 1, '1694207027'),
('Presents', 'AJFaisal', '136A', 'https://codeforces.com/problemset/problem/136/A', 800, 'implementation', 1, 1, '1661578877'),
('01 Game', 'AJFaisal', '1373B', 'https://codeforces.com/problemset/problem/1373/B', 900, 'games', 1, 1, '1667729813'),
('Multiply by 2, divide by 6', 'AJFaisal', '1374B', 'https://codeforces.com/problemset/problem/1374/B', 900, 'math', 1, 3, '1694627619'),
('Move Brackets', 'AJFaisal', '1374C', 'https://codeforces.com/problemset/problem/1374/C', 1000, 'greedy,strings', 1, 1, '1699506130'),
('Three Pairwise Maximums', 'AJFaisal', '1385A', 'https://codeforces.com/problemset/problem/1385/A', 800, 'math', 1, 1, '1663073000'),
('Restore the Permutation by Merger', 'AJFaisal', '1385B', 'https://codeforces.com/problemset/problem/1385/B', 800, 'greedy', 1, 1, '1662637998'),
('Fix You', 'AJFaisal', '1391B', 'https://codeforces.com/problemset/problem/1391/B', 800, 'brute force,greedy,implementation', 1, 2, '1694099544'),
('Substring Removal Game', 'AJFaisal', '1398B', 'https://codeforces.com/problemset/problem/1398/B', 800, 'games,greedy,sortings', 1, 1, '1694094316'),
('Remove Smallest', 'AJFaisal', '1399A', 'https://codeforces.com/problemset/problem/1399/A', 800, 'greedy,sortings', 1, 1, '1662463591'),
('Gifts Fixing', 'AJFaisal', '1399B', 'https://codeforces.com/problemset/problem/1399/B', 800, 'greedy', 1, 1, '1694091849'),
('Yet Another Two Integers Problem', 'AJFaisal', '1409A', 'https://codeforces.com/problemset/problem/1409/A', 800, 'greedy,math', 1, 5, '1662462663'),
('Minimum Product', 'AJFaisal', '1409B', 'https://codeforces.com/problemset/problem/1409/B', 1100, 'brute force,greedy,math', 1, 3, '1670779546'),
('Amusing Joke', 'AJFaisal', '141A', 'https://codeforces.com/problemset/problem/141/A', 800, 'implementation,sortings,strings', 1, 1, '1662123415'),
('Arrival of the General', 'AJFaisal', '144A', 'https://codeforces.com/problemset/problem/144/A', 800, 'implementation', 1, 1, '1661969662'),
('Strange Functions', 'AJFaisal', '1455A', 'https://codeforces.com/problemset/problem/1455/A', 800, 'math,number theory', 1, 1, '1665149258'),
('Favorite Sequence', 'AJFaisal', '1462A', 'https://codeforces.com/problemset/problem/1462/A', 800, 'implementation,two pointers', 1, 1, '1663998657'),
('Dungeon', 'AJFaisal', '1463A', 'https://codeforces.com/problemset/problem/1463/A', 1100, 'binary search,math', 1, 1, '1668620242'),
('Lucky Ticket', 'AJFaisal', '146A', 'https://codeforces.com/problemset/problem/146/A', 800, 'implementation', 1, 1, '1688380350'),
('Insomnia cure', 'AJFaisal', '148A', 'https://codeforces.com/problemset/problem/148/A', 800, 'constructive algorithms,implementation,math', 1, 1, '1661883457'),
('Business trip', 'AJFaisal', '149A', 'https://codeforces.com/problemset/problem/149/A', 900, 'greedy,implementation,sortings', 1, 1, '1667845335'),
('Travelling Salesman Problem', 'AJFaisal', '1503C', 'https://codeforces.com/problemset/problem/1503/C', 2200, 'binary search,data structures,dp,greedy,shortest paths,sortings,two pointers', 0, 1, '1659897306'),
('Sifid and Strange Subsequences', 'AJFaisal', '1529B', 'https://codeforces.com/problemset/problem/1529/B', 1100, 'greedy,math,sortings', 1, 1, '1671387203'),
('Odd Set', 'AJFaisal', '1542A', 'https://codeforces.com/problemset/problem/1542/A', 800, 'math', 1, 2, '1663778398'),
('I_love_\\%username\\%', 'AJFaisal', '155A', 'https://codeforces.com/problemset/problem/155/A', 800, 'brute force', 1, 2, '1662294923'),
('Casimir\'s String Solitaire', 'AJFaisal', '1579A', 'https://codeforces.com/problemset/problem/1579/A', 800, 'math,strings', 1, 2, '1663866929'),
('Next Round', 'AJFaisal', '158A', 'https://codeforces.com/problemset/problem/158/A', 800, '*special,implementation', 1, 1, '1653226152'),
('Twins', 'AJFaisal', '160A', 'https://codeforces.com/problemset/problem/160/A', 900, 'greedy,sortings', 1, 2, '1666100025'),
('Chat Ban', 'AJFaisal', '1612C', 'https://codeforces.com/problemset/problem/1612/C', 1300, 'binary search,math', 1, 2, '1684431904'),
('Make AP', 'AJFaisal', '1624B', 'https://codeforces.com/problemset/problem/1624/B', 900, 'implementation,math', 1, 1, '1667750810'),
('DIV + MOD', 'AJFaisal', '1650B', 'https://codeforces.com/problemset/problem/1650/B', 900, 'math', 1, 3, '1667818617'),
('Division?', 'AJFaisal', '1669A', 'https://codeforces.com/problemset/problem/1669/A', 800, 'implementation', 1, 1, '1662940064'),
('Burglar and Matches', 'AJFaisal', '16B', 'https://codeforces.com/problemset/problem/16/B', 900, 'greedy,implementation,sortings', 1, 2, '1696489132'),
('YES or YES?', 'AJFaisal', '1703A', 'https://codeforces.com/problemset/problem/1703/A', 800, 'brute force,implementation,strings', 1, 1, '1662564574'),
('Three Doors', 'AJFaisal', '1709A', 'https://codeforces.com/problemset/problem/1709/A', 800, 'brute force,greedy,implementation,math', 1, 3, '1659959349'),
('Perfect Permutation', 'AJFaisal', '1711A', 'https://codeforces.com/problemset/problem/1711/A', 800, 'constructive algorithms', 1, 3, '1659975259'),
('Traveling Salesman Problem', 'AJFaisal', '1713A', 'https://codeforces.com/problemset/problem/1713/A', 800, 'geometry,greedy,implementation', 0, 5, '1659962043'),
('Remove Prefix', 'AJFaisal', '1714B', 'https://codeforces.com/problemset/problem/1714/B', 800, 'data structures,greedy,implementation', 0, 3, '1659960582'),
('Minimum  Varied Number', 'AJFaisal', '1714C', 'https://codeforces.com/problemset/problem/1714/C', 800, 'greedy', 1, 2, '1659725142'),
('Phone Code', 'AJFaisal', '172A', 'https://codeforces.com/problemset/problem/172/A', 800, '*special,brute force,implementation', 1, 1, '1665490242'),
('Stripes', 'AJFaisal', '1742C', 'https://codeforces.com/problemset/problem/1742/C', 900, 'implementation', 1, 2, '1666049867'),
('Yes-Yes?', 'AJFaisal', '1759A', 'https://codeforces.com/problemset/problem/1759/A', 800, 'implementation,strings', 1, 1, '1668851329'),
('Good Matrix Elements', 'AJFaisal', '177A1', 'https://codeforces.com/problemset/problem/177/A1', 800, 'implementation', 1, 1, '1688329586'),
('Series of Crimes', 'AJFaisal', '181A', 'https://codeforces.com/problemset/problem/181/A', 800, 'brute force,geometry,implementation', 1, 1, '1694768082'),
('Love Story', 'AJFaisal', '1829A', 'https://codeforces.com/problemset/problem/1829/A', 800, 'implementation,strings', 1, 1, '1684509446'),
('Blank Space', 'AJFaisal', '1829B', 'https://codeforces.com/problemset/problem/1829/B', 800, 'implementation', 1, 1, '1684513242'),
('Joyboard', 'AJFaisal', '1877C', 'https://codeforces.com/problemset/problem/1877/C', 1200, 'math,number theory', 1, 2, '1706811651'),
('Simple Design', 'AJFaisal', '1884A', 'https://codeforces.com/problemset/problem/1884/A', 800, 'brute force,greedy,math', 1, 1, '1697962166'),
('Tricky Template', 'AJFaisal', '1922A', 'https://codeforces.com/problemset/problem/1922/A', 800, 'constructive algorithms,implementation,strings', 1, 2, '1705686249'),
('Stair, Peak, or Neither?', 'AJFaisal', '1950A', 'https://codeforces.com/problemset/problem/1950/A', 800, 'implementation', 1, 1, '1712652922'),
('Upscaling', 'AJFaisal', '1950B', 'https://codeforces.com/problemset/problem/1950/B', 800, 'implementation', 1, 1, '1712653416'),
('Clock Conversion', 'AJFaisal', '1950C', 'https://codeforces.com/problemset/problem/1950/C', 800, 'implementation,math', 1, 1, '1712654134'),
('Product of Binary Decimals', 'AJFaisal', '1950D', 'https://codeforces.com/problemset/problem/1950/D', 1100, 'brute force,dp,implementation,number theory', 1, 1, '1712655348'),
('0, 1, 2, Tree!', 'AJFaisal', '1950F', 'https://codeforces.com/problemset/problem/1950/F', 1700, 'bitmasks,brute force,greedy,implementation,trees', 1, 2, '1712657257'),
('Yogurt Sale', 'AJFaisal', '1955A', 'https://codeforces.com/problemset/problem/1955/A', 800, 'math', 1, 1, '1713428229'),
('Progressive Square', 'AJFaisal', '1955B', 'https://codeforces.com/problemset/problem/1955/B', 1000, 'constructive algorithms,data structures,implementation,sortings', 1, 1, '1713429863'),
('Inhabitant of the Deep Sea', 'AJFaisal', '1955C', 'https://codeforces.com/problemset/problem/1955/C', 1300, 'greedy,implementation,math', 1, 1, '1713431673'),
('Theatre Square', 'AJFaisal', '1A', 'https://codeforces.com/problemset/problem/1/A', 1000, 'math', 1, 7, '1653216978'),
('Drinks', 'AJFaisal', '200B', 'https://codeforces.com/problemset/problem/200/B', 800, 'implementation,math', 1, 3, '1661678473'),
('LLPS', 'AJFaisal', '202A', 'https://codeforces.com/problemset/problem/202/A', 800, 'binary search,bitmasks,brute force,greedy,implementation,strings', 1, 1, '1688223865'),
('Dubstep', 'AJFaisal', '208A', 'https://codeforces.com/problemset/problem/208/A', 900, 'strings', 1, 1, '1666340818'),
('Parallelepiped', 'AJFaisal', '224A', 'https://codeforces.com/problemset/problem/224/A', 1100, 'brute force,geometry,math', 1, 2, '1668859290'),
('Effective Approach', 'AJFaisal', '227B', 'https://codeforces.com/problemset/problem/227/B', 1100, 'implementation', 1, 9, '1669293010'),
('Is your horseshoe on the other hoof?', 'AJFaisal', '228A', 'https://codeforces.com/problemset/problem/228/A', 800, 'implementation', 1, 2, '1661879957'),
('Team', 'AJFaisal', '231A', 'https://codeforces.com/problemset/problem/231/A', 800, 'brute force,greedy', 1, 3, '1684409005'),
('Perfect Permutation', 'AJFaisal', '233A', 'https://codeforces.com/problemset/problem/233/A', 800, 'implementation,math', 1, 2, '1688223171'),
('Lefthanders and Righthanders ', 'AJFaisal', '234A', 'https://codeforces.com/problemset/problem/234/A', 1200, 'implementation', 1, 2, '1706969889'),
('Boy or Girl', 'AJFaisal', '236A', 'https://codeforces.com/problemset/problem/236/A', 800, 'brute force,implementation,strings', 1, 13, '1662247893'),
('Little Elephant and Bits', 'AJFaisal', '258A', 'https://codeforces.com/problemset/problem/258/A', 1100, 'greedy,math', 1, 2, '1668965312'),
('Roma and Lucky Numbers', 'AJFaisal', '262A', 'https://codeforces.com/problemset/problem/262/A', 800, 'implementation', 0, 1, '1663127736'),
('Beautiful Matrix', 'AJFaisal', '263A', 'https://codeforces.com/problemset/problem/263/A', 800, 'implementation', 1, 1, '1653300056'),
('Stones on the Table', 'AJFaisal', '266A', 'https://codeforces.com/problemset/problem/266/A', 800, 'implementation', 1, 1, '1659984384'),
('Queue at the School', 'AJFaisal', '266B', 'https://codeforces.com/problemset/problem/266/B', 800, 'constructive algorithms,graph matchings,implementation,shortest paths', 1, 1, '1660309712'),
('Games', 'AJFaisal', '268A', 'https://codeforces.com/problemset/problem/268/A', 800, 'brute force', 1, 1, '1662117309'),
('Beautiful Year', 'AJFaisal', '271A', 'https://codeforces.com/problemset/problem/271/A', 800, 'brute force', 1, 1, '1661665566'),
('Word Capitalization', 'AJFaisal', '281A', 'https://codeforces.com/problemset/problem/281/A', 800, 'implementation,strings', 1, 2, '1659979965'),
('Bit++', 'AJFaisal', '282A', 'https://codeforces.com/problemset/problem/282/A', 800, 'implementation', 1, 2, '1653229406'),
('Even Odds', 'AJFaisal', '318A', 'https://codeforces.com/problemset/problem/318/A', 900, 'math', 1, 8, '1666342886'),
('Borze', 'AJFaisal', '32B', 'https://codeforces.com/problemset/problem/32/B', 800, 'expression parsing,implementation', 1, 1, '1692364783'),
('Helpful Maths', 'AJFaisal', '339A', 'https://codeforces.com/problemset/problem/339/A', 800, 'greedy,implementation,sortings,strings', 1, 2, '1659979533'),
('Magnets', 'AJFaisal', '344A', 'https://codeforces.com/problemset/problem/344/A', 800, 'implementation', 1, 6, '1661673896'),
('Cinema Line', 'AJFaisal', '349A', 'https://codeforces.com/problemset/problem/349/A', 1100, 'greedy,implementation', 1, 2, '1670869601'),
('Reconnaissance 2', 'AJFaisal', '34A', 'https://codeforces.com/problemset/problem/34/A', 800, 'implementation', 1, 1, '1692315288'),
('Sale', 'AJFaisal', '34B', 'https://codeforces.com/problemset/problem/34/B', 900, 'greedy,sortings', 1, 2, '1696485437'),
('Army', 'AJFaisal', '38A', 'https://codeforces.com/problemset/problem/38/A', 800, 'implementation', 1, 1, '1692308002'),
('Pattern', 'AJFaisal', '412C', 'https://codeforces.com/problemset/problem/412/C', 1200, 'implementation,strings', 1, 1, '1706809814'),
('Translation', 'AJFaisal', '41A', 'https://codeforces.com/problemset/problem/41/A', 800, 'implementation,strings', 1, 9, '1661260307'),
('Pasha and Hamsters', 'AJFaisal', '421A', 'https://codeforces.com/problemset/problem/421/A', 800, 'constructive algorithms,implementation', 0, 1, '1665577944'),
('Police Recruits', 'AJFaisal', '427A', 'https://codeforces.com/problemset/problem/427/A', 800, 'implementation', 1, 1, '1662337893'),
('Choosing Teams', 'AJFaisal', '432A', 'https://codeforces.com/problemset/problem/432/A', 800, 'greedy,implementation,sortings', 1, 1, '1662554545'),
('Anton and Letters', 'AJFaisal', '443A', 'https://codeforces.com/problemset/problem/443/A', 800, 'constructive algorithms,implementation', 1, 1, '1661974077'),
('Game With Sticks', 'AJFaisal', '451A', 'https://codeforces.com/problemset/problem/451/A', 900, 'implementation', 1, 3, '1667704003'),
('Laptops', 'AJFaisal', '456A', 'https://codeforces.com/problemset/problem/456/A', 1100, 'sortings', 1, 1, '1671376953'),
('George and Accommodation', 'AJFaisal', '467A', 'https://codeforces.com/problemset/problem/467/A', 800, 'implementation', 1, 2, '1661521429'),
('I Wanna Be the Guy', 'AJFaisal', '469A', 'https://codeforces.com/problemset/problem/469/A', 800, 'greedy,implementation', 1, 1, '1661882525'),
('MUH and Sticks', 'AJFaisal', '471A', 'https://codeforces.com/problemset/problem/471/A', 1100, 'implementation', 1, 4, '1686290253');
INSERT INTO `problems` (`Name`, `Solved_By`, `Problem_ID`, `Link`, `Rating`, `Tags`, `Solved`, `Attempted`, `Last_Update`) VALUES
('Design Tutorial: Learn from Math', 'AJFaisal', '472A', 'https://codeforces.com/problemset/problem/472/A', 800, 'math,number theory', 1, 1, '1662465953'),
('Keyboard', 'AJFaisal', '474A', 'https://codeforces.com/problemset/problem/474/A', 900, 'implementation', 1, 1, '1667705564'),
('Initial Bet', 'AJFaisal', '478A', 'https://codeforces.com/problemset/problem/478/A', 1100, 'implementation', 1, 6, '1671038323'),
('Triangular numbers', 'AJFaisal', '47A', 'https://codeforces.com/problemset/problem/47/A', 800, 'brute force,math', 1, 1, '1692294877'),
('Calculating Function', 'AJFaisal', '486A', 'https://codeforces.com/problemset/problem/486/A', 800, 'implementation,math', 1, 6, '1660834647'),
('Sleuth', 'AJFaisal', '49A', 'https://codeforces.com/problemset/problem/49/A', 800, 'implementation', 1, 1, '1692278820'),
('Watermelon', 'AJFaisal', '4A', 'https://codeforces.com/problemset/problem/4/A', 800, 'brute force,math', 1, 2, '1653210628'),
('Maximum in Table', 'AJFaisal', '509A', 'https://codeforces.com/problemset/problem/509/A', 800, 'brute force,implementation', 1, 1, '1662942994'),
('Domino piling', 'AJFaisal', '50A', 'https://codeforces.com/problemset/problem/50/A', 800, 'greedy,math', 1, 1, '1653226953'),
('Fox And Snake', 'AJFaisal', '510A', 'https://codeforces.com/problemset/problem/510/A', 800, 'implementation', 1, 2, '1662247051'),
('A and B and Compilation Errors', 'AJFaisal', '519B', 'https://codeforces.com/problemset/problem/519/B', 1100, 'data structures,implementation,sortings', 1, 3, '1672674691'),
('Pangram', 'AJFaisal', '520A', 'https://codeforces.com/problemset/problem/520/A', 800, 'implementation,strings', 1, 2, '1662057830'),
('Soldier and Bananas', 'AJFaisal', '546A', 'https://codeforces.com/problemset/problem/546/A', 800, 'brute force,implementation,math', 1, 1, '1660036378'),
('Vasya the Hipster', 'AJFaisal', '581A', 'https://codeforces.com/problemset/problem/581/A', 800, 'implementation,math', 1, 3, '1662338726'),
('Chat room', 'AJFaisal', '58A', 'https://codeforces.com/problemset/problem/58/A', 1000, 'greedy,strings', 1, 1, '1666545680'),
('Word', 'AJFaisal', '59A', 'https://codeforces.com/problemset/problem/59/A', 800, 'implementation,strings', 1, 1, '1660036397'),
('Elephant', 'AJFaisal', '617A', 'https://codeforces.com/problemset/problem/617/A', 800, 'math', 1, 2, '1660043616'),
('Ultra-Fast Mathematician', 'AJFaisal', '61A', 'https://codeforces.com/problemset/problem/61/A', 800, 'implementation', 1, 5, '1661680304'),
('Vanya and Fence', 'AJFaisal', '677A', 'https://codeforces.com/problemset/problem/677/A', 800, 'implementation', 1, 1, '1661345713'),
('Young Physicist', 'AJFaisal', '69A', 'https://codeforces.com/problemset/problem/69/A', 1000, 'implementation,math', 1, 5, '1688330023'),
('Cards', 'AJFaisal', '701A', 'https://codeforces.com/problemset/problem/701/A', 800, 'greedy,implementation', 1, 1, '1693241919'),
('Maximum Increase', 'AJFaisal', '702A', 'https://codeforces.com/problemset/problem/702/A', 800, 'dp,greedy,implementation', 1, 1, '1693136142'),
('Mishka and Game', 'AJFaisal', '703A', 'https://codeforces.com/problemset/problem/703/A', 800, 'implementation', 1, 3, '1693135235'),
('Hulk', 'AJFaisal', '705A', 'https://codeforces.com/problemset/problem/705/A', 800, 'implementation', 1, 1, '1661877934'),
('Brain\'s Photos', 'AJFaisal', '707A', 'https://codeforces.com/problemset/problem/707/A', 800, 'implementation', 1, 1, '1693134460'),
('Bus to Udayland', 'AJFaisal', '711A', 'https://codeforces.com/problemset/problem/711/A', 800, 'brute force,implementation', 1, 2, '1693134001'),
('Crazy Computer', 'AJFaisal', '716A', 'https://codeforces.com/problemset/problem/716/A', 800, 'implementation', 1, 1, '1693073597'),
('Way Too Long Words', 'AJFaisal', '71A', 'https://codeforces.com/problemset/problem/71/A', 800, 'strings', 1, 1, '1653213526'),
('The New Year: Meeting Friends', 'AJFaisal', '723A', 'https://codeforces.com/problemset/problem/723/A', 800, 'implementation,math,sortings', 1, 1, '1662463921'),
('Night at the Museum', 'AJFaisal', '731A', 'https://codeforces.com/problemset/problem/731/A', 800, 'implementation,strings', 1, 1, '1663073963'),
('Buy a Shovel', 'AJFaisal', '732A', 'https://codeforces.com/problemset/problem/732/A', 800, 'brute force,constructive algorithms,implementation,math', 1, 1, '1662391748'),
('Anton and Danik', 'AJFaisal', '734A', 'https://codeforces.com/problemset/problem/734/A', 800, 'implementation,strings', 1, 1, '1660318373'),
('Anton and Digits', 'AJFaisal', '734B', 'https://codeforces.com/problemset/problem/734/B', 800, 'brute force,greedy,implementation,math', 1, 2, '1693727026'),
('Decoding', 'AJFaisal', '746B', 'https://codeforces.com/problemset/problem/746/B', 900, 'implementation,strings', 1, 1, '1696442216'),
('Bachgold Problem', 'AJFaisal', '749A', 'https://codeforces.com/problemset/problem/749/A', 800, 'greedy,implementation,math,number theory', 1, 3, '1692435076'),
('New Year and Hurry', 'AJFaisal', '750A', 'https://codeforces.com/problemset/problem/750/A', 800, 'binary search,brute force,implementation,math', 1, 1, '1662335342'),
('PolandBall and Hypothesis', 'AJFaisal', '755A', 'https://codeforces.com/problemset/problem/755/A', 800, 'brute force,graphs,math,number theory', 1, 1, '1692366904'),
('Anton and Polyhedrons', 'AJFaisal', '785A', 'https://codeforces.com/problemset/problem/785/A', 800, 'implementation,strings', 1, 1, '1662119215'),
('Bear and Big Brother', 'AJFaisal', '791A', 'https://codeforces.com/problemset/problem/791/A', 800, 'implementation', 1, 2, '1660036448'),
('Fake News (easy)', 'AJFaisal', '802G', 'https://codeforces.com/problemset/problem/802/G', 800, 'implementation,strings', 1, 1, '1665487279'),
('Panoramix\'s Prediction', 'AJFaisal', '80A', 'https://codeforces.com/problemset/problem/80/A', 800, 'brute force', 1, 5, '1662563473'),
('Double Cola', 'AJFaisal', '82A', 'https://codeforces.com/problemset/problem/82/A', 1100, 'implementation,math', 1, 2, '1670774074'),
('Modular Exponentiation', 'AJFaisal', '913A', 'https://codeforces.com/problemset/problem/913/A', 900, 'implementation,math', 1, 2, '1668342656'),
('Chips', 'AJFaisal', '92A', 'https://codeforces.com/problemset/problem/92/A', 800, 'implementation,math', 1, 1, '1692275778'),
('Fafa and the Gates', 'AJFaisal', '935B', 'https://codeforces.com/problemset/problem/935/B', 900, 'implementation', 1, 1, '1696266879'),
('Football', 'AJFaisal', '96A', 'https://codeforces.com/problemset/problem/96/A', 900, 'implementation,strings', 1, 3, '1666098162'),
('Wrong Subtraction', 'AJFaisal', '977A', 'https://codeforces.com/problemset/problem/977/A', 800, 'implementation', 1, 1, '1660047750'),
('Businessmen Problems', 'AJFaisal', '981B', 'https://codeforces.com/problemset/problem/981/B', 1000, 'sortings', 1, 1, '1671208122'),
('Getting an A', 'AJFaisal', '991B', 'https://codeforces.com/problemset/problem/991/B', 900, 'greedy,sortings', 1, 1, '1696183223'),
('Hit the Lottery', 'AJFaisal', '996A', 'https://codeforces.com/problemset/problem/996/A', 800, 'dp,greedy', 1, 1, '1662118462'),
('Mishka and Contest', 'AJFaisal', '999A', 'https://codeforces.com/problemset/problem/999/A', 800, 'brute force,implementation', 1, 1, '1696048991'),
('Reversing Encryption', 'AJFaisal', '999B', 'https://codeforces.com/problemset/problem/999/B', 900, 'implementation', 1, 1, '1696050130'),
('Alphabetic Removals', 'AJFaisal', '999C', 'https://codeforces.com/problemset/problem/999/C', 1200, 'implementation', 1, 1, '1696051760'),
('Equalize the Remainders', 'AJFaisal', '999D', 'https://codeforces.com/problemset/problem/999/D', 1900, 'data structures,greedy,implementation', 0, 1, '1696055009');

-- --------------------------------------------------------

--
-- Table structure for table `registered_people`
--

CREATE TABLE `registered_people` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `codeforces_handle` varchar(100) NOT NULL,
  `codeforces_current_rating` int(15) DEFAULT NULL,
  `codeforces_max_rating` int(15) DEFAULT NULL,
  `codeforces_titlephoto` varchar(100) DEFAULT NULL,
  `codeforces_current_rank` varchar(50) DEFAULT NULL,
  `codeforces_max_rank` varchar(50) DEFAULT NULL,
  `Country` varchar(30) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Solved` int(20) NOT NULL,
  `Submission` int(20) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_people`
--

INSERT INTO `registered_people` (`Email`, `Password`, `Name`, `codeforces_handle`, `codeforces_current_rating`, `codeforces_max_rating`, `codeforces_titlephoto`, `codeforces_current_rank`, `codeforces_max_rank`, `Country`, `Institute`, `Solved`, `Submission`, `Image`) VALUES
('sajibbhattacharjee128@gmail.com', '1234', 'Sojib', '-is-this-dft_', 1413, 1419, 'https://userpic.codeforces.org/no-title.jpg', 'specialist', 'specialist', 'Bangladesh', 'Chittagong University of Engineering and Technology', 162, 400, 'image/logo.PNG'),
('ajfaisal1208023@gmail.com', '1208023', 'Adnan Faisal', 'AJFaisal', 377, 377, 'https://userpic.codeforces.org/2436735/title/e79186aa2eb39116.jpg', 'newbie', 'newbie', 'Bangladesh', 'Chittagong University of Engineering and Technology', 205, 419, 'image/WhatsApp Image 2024-04-29 at 00.58.47_5d96ffb2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_contests`
--

CREATE TABLE `upcoming_contests` (
  `Contest_ID` varchar(30) NOT NULL,
  `Contest_Name` varchar(150) NOT NULL,
  `Site` varchar(30) NOT NULL,
  `Start` datetime NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_contests`
--

INSERT INTO `upcoming_contests` (`Contest_ID`, `Contest_Name`, `Site`, `Start`, `Duration`, `Link`) VALUES
('1982', 'Codeforces Round 955 (Div. 2)', 'CodeForces', '2024-06-25 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1982'),
('1983', 'Codeforces Round (Div. 2)', 'CodeForces', '2024-07-07 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1983'),
('1986', 'Codeforces Round 954 (Div. 3)', 'CodeForces', '2024-06-23 20:35:00', '2h 15m', 'https://codeforces.com/contestRegistration/1986'),
('1987', 'Codeforces Round (Div. 1 + Div. 2)', 'CodeForces', '2024-06-30 20:35:00', '3h 0m', 'https://codeforces.com/contestRegistration/1987'),
('1988', 'Codeforces Round (Div. 2)', 'CodeForces', '2024-07-15 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1988'),
('1989', 'Educational Codeforces Round 167 (Rated for Div. 2)', 'CodeForces', '2024-06-27 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1989');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_iupc`
--

CREATE TABLE `upcoming_iupc` (
  `Contest_id` varchar(30) NOT NULL,
  `Contest_Name` varchar(500) NOT NULL,
  `Site` varchar(30) NOT NULL,
  `Start` datetime NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`Solved_By`,`Problem_ID`);

--
-- Indexes for table `registered_people`
--
ALTER TABLE `registered_people`
  ADD PRIMARY KEY (`codeforces_handle`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_contests`
--
ALTER TABLE `upcoming_contests`
  ADD PRIMARY KEY (`Contest_ID`);

--
-- Indexes for table `upcoming_iupc`
--
ALTER TABLE `upcoming_iupc`
  ADD PRIMARY KEY (`Contest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
