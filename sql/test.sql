
--
-- テーブルの構造 `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- テーブルのデータのダンプ `list`
--

INSERT INTO `list` (`id`, `name`, `created`, `modified`) VALUES
(1, 'aaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'bbb', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ccc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '5556677', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'qqqq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'qqqq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'rrr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'rrrrtttt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '1111', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '日本語', '2014-09-12 04:16:16', '0000-00-00 00:00:00'),
(11, '文字化けテスト', '0000-00-00 00:00:00', '2014-09-12 14:36:21');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `email`) VALUES
(1, 'Billa', 'bagharbilla@gmail.com'),
(2, 'Gower', 'adgower@gmail.com');


