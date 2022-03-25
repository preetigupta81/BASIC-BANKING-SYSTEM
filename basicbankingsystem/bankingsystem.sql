

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL PRIMARY KEY,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Saneet', 'Ankit', 200, '2021-04-17 18:58:27'),
(2, 'Saneet', 'Ankit', 200, '2021-04-17 19:00:31'),
(3, 'Ankit', 'Niky', 5000, '2021-04-17 19:01:32'),
(4, 'Saneet', 'Niky', 5000, '2021-04-17 19:06:15'),
(5, 'Arjun', 'Ankit', 500, '2021-04-17 19:28:24'),
(6, 'Arjun', 'Ankit', 500, '2021-04-17 19:30:31'),
(7, 'Arjun', 'Ankit', 200, '2021-04-17 19:31:22'),
(8, 'Siddhu', 'Aman', 520, '2021-04-18 07:39:58'),
(9, 'Arka', 'Saneet', 500, '2021-04-18 09:37:08'),
(10, 'Saneet', 'Aman', 100, '2021-04-18 11:52:18');

CREATE TABLE `users` (
  `id` int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1087, 'Ankit', 'shah@gmail.com', 46600),
(2654, 'Aman', 'chuha@gmail.com', 30620),
(3624, 'Gaurav', 'mallu@gmail.com', 40000),
(4542, 'Arjun', 'nepali@gmail.com', 48800),
(5345, 'Saneet', 'zombie@gmail.com', 35000),
(5465, 'Arka', 'baby@gmail.com', 49500),
(6554, 'Niky', 'loveday@gmail.com', 40000),
(7875, 'Siddhu', 'pajji@gmail.com', 49480),
(8877, 'Suvam', 'perimal@gmail.com', 40000),
(9245, 'Sachin', 'nalla@gmail.com', 30000);
