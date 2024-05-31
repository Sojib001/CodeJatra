-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
('Letters', '-is-this-dft_', '978C', 'https://codeforces.com/problemset/problem/978/C', 1000, 'binary search,implementation,two pointers', 1, 1, '1685465073');

-- --------------------------------------------------------

--
-- Table structure for table `registered_people`
--

CREATE TABLE `registered_people` (
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `codeforces_handle` varchar(100) NOT NULL,
  `atcoder_handle` varchar(100) DEFAULT NULL,
  `codeforces_current_rating` int(15) DEFAULT NULL,
  `codeforces_max_rating` int(15) DEFAULT NULL,
  `codeforces_titlephoto` varchar(100) DEFAULT NULL,
  `codeforces_current_rank` varchar(50) DEFAULT NULL,
  `codeforces_max_rank` varchar(50) DEFAULT NULL,
  `atcoder_current_rank` varchar(50) DEFAULT NULL,
  `atcoder_max_rank` varchar(50) DEFAULT NULL,
  `atcoder_current_rating` int(15) DEFAULT NULL,
  `atcoder_max_rating` int(15) DEFAULT NULL,
  `atcoder_contest_count` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_people`
--

INSERT INTO `registered_people` (`Email`, `Name`, `codeforces_handle`, `atcoder_handle`, `codeforces_current_rating`, `codeforces_max_rating`, `codeforces_titlephoto`, `codeforces_current_rank`, `codeforces_max_rank`, `atcoder_current_rank`, `atcoder_max_rank`, `atcoder_current_rating`, `atcoder_max_rating`, `atcoder_contest_count`) VALUES
('sajibbhattacharjee128@gmail.com', 'Sojib', '-is-this-dft_', 'sojib_003', 1413, 1419, 'https://userpic.codeforces.org/no-title.jpg', 'specialist', 'specialist', '4 kyu', '3 kyu', 1200, 1300, 10);

-- --------------------------------------------------------

--
-- Table structure for table `solved_count_by_tag`
--

CREATE TABLE `solved_count_by_tag` (
  `email` varchar(100) NOT NULL,
  `Greedy` int(11) NOT NULL,
  `Graph` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `Implementation` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `Others` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solved_count_by_tag`
--

INSERT INTO `solved_count_by_tag` (`email`, `Greedy`, `Graph`, `DP`, `Implementation`, `Math`, `Others`) VALUES
('sajibbhattacharjee128@gmail.com', 10, 20, 25, 20, 30, 110),
('sagor@gmail.com', 20, 30, 25, 30, 30, 15);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
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
('1976', 'Educational Codeforces Round 166 (Rated for Div. 2)', 'CodeForces', '2024-05-30 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1976'),
('1978', 'Codeforces Round (Div. 2)', 'CodeForces', '2024-06-16 15:05:00', '2h 0m', 'https://codeforces.com/contestRegistration/1978'),
('1979', 'Codeforces Round (Div. 2)', 'CodeForces', '2024-06-06 20:35:00', '2h 0m', 'https://codeforces.com/contestRegistration/1979'),
('1980', 'Codeforces Round (Div. 3)', 'CodeForces', '2024-06-03 20:35:00', '2h 15m', 'https://codeforces.com/contestRegistration/1980'),
('1981', 'Codeforces Round 949 (Div. 2)', 'CodeForces', '2024-05-31 16:05:00', '2h 0m', 'https://codeforces.com/contestRegistration/1981'),
('abc358', 'Ⓐ◉ CodeQUEEN 2024 予選 (AtCoder Beginner Contest 358)', 'AtCoder', '2024-06-15 18:00:00', '1h 40m', 'https://atcoder.jp/contests/abc358'),
('ahc034', 'Ⓗ◉ Toyota Programming Contest 2024#6（AtCoder Heuristic Contest 034）', 'AtCoder', '2024-06-16 12:00:00', '4h 0m', 'https://atcoder.jp/contests/ahc034'),
('arc179', 'Ⓐ◉ AtCoder Regular Contest 179', 'AtCoder', '2024-06-02 18:00:00', '2h 0m', 'https://atcoder.jp/contests/arc179'),
('arc180', 'Ⓐ◉ AtCoder Regular Contest 180', 'AtCoder', '2024-06-29 18:00:00', '2h 0m', 'https://atcoder.jp/contests/arc180');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
