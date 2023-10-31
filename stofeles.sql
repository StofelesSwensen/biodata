CREATE TABLE `stofeles` (
  `ic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `secondary` varchar(255) NOT NULL,
  `diploma` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `stofeles` (`ic`, `name`, `father`, `mother`, `address`, `phone`, `hobby`, `age`, `gender`, `email`, `images`, `secondary`, `diploma`, `degree`) VALUES
('010302130249', 'Stofeles Swensen Anak Sijamat', 'Sijamat Anak Bujak', 'Ceilla Anak William Mijik', 'Taman Desa Ilmu, Kota Samarahan, Sarawak', '0105963870', 'Playing musical instrument', 22, 'Male', 'stofelesswensen20@gmail.com', 'picture.jpg', 'SMT Sejingkat', 'UiTM Kampus Samarhan 2', 'UiTM Shah Alam');
