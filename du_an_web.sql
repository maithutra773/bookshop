-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:33067
-- Thời gian đã tạo: Th10 24, 2020 lúc 03:00 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(3, ' dggfgh', 14, 'admin', '2020-10-15'),
(4, 'cxcxvcxvb', 11, 'admin', '2020-10-15'),
(5, 'sách đọc rất hay', 11, 'loint11331', '2020-10-24'),
(6, 'sách đọc rất hay', 17, 'loint11331', '2020-10-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dac_biet` bit(64) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(11, 'Doraemon', 26000, 20000, 'tải xuống.png', '2020-10-14', 'Bộ truyện được xem là huyền thoại của Nhật Bản. Nói về cuộc sống của một chú nhóc tên Nobita, tính tình hậu đậu và chú mèo máy Doremon đến từ thế kỉ 22 cùng những người bạn Xuka, Chaien, Xeko; để từ đó gây ra bao tiếng cười và rút ra những bài học ý nghĩa', b'0000000000000000000000000000000000000000000000000000000000000000', 36, 13),
(12, 'Ô Long Viện', 30000, 25000, 'tải xuống.jpg', '2020-10-14', 'Ô Long Viện - Bộ kinh điển là series đầu tiên ghi dấu thành công của Au, Yao-Hsing trên thị trường truyện tranh của châu Á. 12 tập truyện kể về bốn thầy trò tài giỏi tu tập võ nghệ và hô phong hoán vũ trên giang hồ. Bộ sách từng gây cơn sốt khắp Đài Loan ', b'0000000000000000000000000000000000000000000000000000000000110001', 5, 12),
(13, 'Tên Của Trò Chơi Là Bắt Cóc - Higashino Keigo ', 200000, 185000, '19552019115502_57409210_1273734552778975_2721325436620505088_n_663x960__73300.jpg', '2020-10-14', 'Tác giả: Higashino Keigo\r\nDịch giả: Đỗ Phan Thu Hà\r\nSố trang: 304\r\nLink truyện online: https://tiki.vn/ten-cua-tro-choi-la-bat-coc-p14449113.html', b'0000000000000000000000000000000000000000000000000000000000000000', 3, 14),
(14, 'Ê-dốp', 50000, 38500, 'e-dop-1.jpg', '2020-10-14', 'GIỚI THIỆU TÁC PHẨM\r\nCuốn sách này gồm 60 câu chuyện ngụ ngôn Ê-dốp vô cùng quen thuộc, được minh họa lại thật ngộ nghĩnh, đáng yêu, hợp với tuổi nhi đồng. Con cáo và chùm nho, Chú bé chăn cừu, Thỏ và Rùa chạy thi, Kiến và Ve sầu… là những truyện ngụ ngôn', b'0000000000000000000000000000000000000000000000000000000000000000', 15, 15),
(15, 'Dragon Ball - 7 Viên Ngọc Rồng ', 40000, 35000, 'image_185974.jpg', '2020-10-14', 'Dragon Ball - 7 Viên Ngọc Rồng là câu chuyện kể về cậu bé có đuôi khỉ tên là Goku được tìm thấy bởi ông lão sống một mình trong rừng, ông lão xem đứa bé như là cháu của mình. Một ngày nọ Goku tình cờ gặp cô gái tên là Bulma trên đường đi bắt cá về, Goku v', b'0000000000000000000000000000000000000000000000000000000000000000', 2, 13),
(16, 'THÁM TỬ LỪNG DANH CONAN', 30000, 25000, '1_83.jpg', '2020-10-21', 'Kudo Shinichi là một cậu thám tử học sinh năng nổ với biệt tài suy luận có thể sánh ngang với Sherlock Holmes! Một ngày nọ, khi mải đuổi theo những kẻ khả nghi, cậu đã bị chúng cho uống một loại thuốc kì lạ khiến cho cơ thể bị teo nhỏ. Vậy là một thám tử tí hon xuất hiện với cái tên giả: Edogawa Conan!!', b'0000000000000000000000000000000000000000000000000000000000110001', 9, 13),
(17, ' Tuổi thơ dữ dội', 50000, 40000, 'tuoi-tho-du-doi-sach-van-hoc-vn.jpg', '2020-10-23', 'Tuổi thơ dữ dội là cuốn tiểu thuyết của nhà văn Phùng Quán. Truyện được viết vào năm 1968 và hoàn thành vào năm 1986. Vào năm 1988, tiểu thuyết được xuất bản và đến năm 1990 được nhận Giải thưởng Văn học Thiếu nhi của Hội Nhà văn Việt Nam. Đến nay, tác phẩm đã được dựng thành phim.', b'0000000000000000000000000000000000000000000000000000000000000000', 7, 16),
(18, 'Tiếng chim hót trong bụi mận gai', 50000, 45000, 'tieng-chim-hot-trong-bui-man-gai-sach-vh.jpg', '2020-10-23', 'Đây là tiểu thuyết đầu tay của nữ y tá có tên Colleen McCullough. Tực gốc của cuốn sách văn học này là “The Thorn Birds”. Mặc dù đã ra đời cách đây khoảng 40 năm nhưng những giá trị sâu sắc của cuốn sách vẫn giữ mãi và khiến bao đọc giả mê mẩn.\r\nTiểu thuyết được viết với diễn biến liền mạch, xoay quanh cuộc tình giữa Meggie Cleary thuộc gia đình Cleary và cha đạo Ralph de Bricassart. Đây là mối tình trong sáng, táo bạo vì bị ngăn cấm.\r\n\r\nMặc dù vấp phải sự phản đối, trắc trở mất mát lẫn đau thương nhưng họ vẫn mạnh mẽ vượt qua để dành lấy tình yêu cho mình. Tuy cuối cùng không đến được với nhau, nhưng họ cũng đã cảm nhận được sự tuyệt vời trong chính mối tình này.', b'0000000000000000000000000000000000000000000000000000000000110001', 0, 16),
(19, 'Số đỏ – sách văn học hay của Việt Nam', 90000, 75000, 'so-do-sach-vh-600x842.jpg', '2020-10-23', 'Tác phẩm số đỏ của Vũ Trọng Phụng rất nổi tiếng và quen thuộc. Sử dụng ngòi bút trào phúng độc đáo, Vũ Trọng Phụng đã phơi bày bộ mặt thật của xã hội tư sản thành thị Việt Nam.\r\nMột xã hội với các phong trào tốt đẹp như “Thể thao”, “Âu hóa”, “Tiến bộ”, “giải phóng nữ quyền”… Thế nhưng thực chất lại là sự giả dối, chà đạp lên những nét đẹp, đạo đức truyền thống của người Việt.\r\n\r\nSố đỏ đã thành công trong việc lên án gay gắt xã hội lúc bấy giờ với giọng điệu chua chát, mỉa mai nhưng rất sắc nhọn.', b'0000000000000000000000000000000000000000000000000000000000110001', 3, 16),
(20, 'Cuốn theo chiều gió', 100000, 80000, 'cuon-theo-chieu-gio-sach-vh.jpg', '2020-10-23', 'Một trong những cuốn sách văn học hay đáng để đọc chính là “Cuốn theo chiều gió”. Năm 1936, tác phẩm đã ra đời và đến năm 1937, tác giả đã nhận được giải Pulitzer danh giá. Tác phẩm đã từng được dựng thành phim và rất được yêu thích bởi các đọc giả.\r\nCâu chuyện là cuộc đời của cô gái miền nam Hoa Kỳ có tên Scarlett O’Hara. Cô đã rất mạnh mẽ vượt qua chiến tranh cũng như sự gian khổ hậu chiến tranh để đi tìm người đàn ông cô yêu thưở thiếu thời.\r\n\r\nCuối cùng sự cố gắng của cô đã được đền đáp và cô được sống bên cạnh người đàn ông mà mình yêu.\r\n\r\n', b'0000000000000000000000000000000000000000000000000000000000110001', 1, 16),
(21, 'Bố già – cuốn sách văn học hay đáng để đọc', 120000, 99000, 'sach-bo-gia-sach-vh.gif', '2020-10-23', 'Nếu là người yêu thích văn học thì đừng bỏ lỡ cuốn tiểu thuyết Bố già của tác giả Mario Puzo. Tác phẩm kể về thủ lĩnh tối cao của giới Mafia Mỹ là ông Don Vito Corleone, người gốc Sicily và được mọi người gọi với cái tên quen thuộc “Bố già”.\r\nCuộc sống của ông có rất nhiều kẻ căm ghét, kẻ thù muốn tìm cách hãm hại ông. Thế nhưng, chúng cũng rất sợ hãi, dè chừng bởi ông là người rất nhạy bén, với đôi mắt chứa đựng uy lực tối thượng nên có thể biết hết, nhìn thấy hết và làm được hết.\r\n\r\nMặc dù là thủ lĩnh của tổ chức khét tiếng nhưng Bố già lại là người duy nhất giúp đỡ bạn bè, thân quyến thoát khỏi những nỗi oan hay những thế kẹt nguy hiểm. Thậm chí, những nỗi oan, thế kẹt này ngay cả pháp luật cũng khó gỡ được.', b'0000000000000000000000000000000000000000000000000000000000110001', 19, 16),
(22, 'VIỆT NAM SỬ LƯỢC – TRẦN TRỌNG KIM (TRỌN BỘ)', 87000, 60000, 'viet-nam-su-luoc-tran-trong-kim.png', '2020-10-23', 'Liên hệ\r\n\r\nViệt Nam sử lược là cuốn sách lịch sử Việt Nam đầu tiên viết bằng chữ quốc ngữ, hệ thống lại toàn bộ lịch sử nước Việt (cho đến thời Pháp thuộc). Nó là cuốn sách sử Việt đầu tiên thoát khỏi truyền thống viết sử theo lối biên niên, cương mục, ngôn từ khó hiểu của sách sử Việt thời phong kiến, nên được giới bình dân đón nhận do ngắn gọn, súc tích và dễ hiểu.\r\nTrần Trọng Kim qua Việt Nam Sử Lược là một người yêu nước thành tâm, một nhà sử học chân chính, trung thực, một người cầm bút có nhân cách, một học giả xuất sắc đã cống hiến phần trí tuệ, chí ít cho các thế hệ nửa đầu thế kỷ XX và Chính phủ Trần Trọng Kim là sản phẩm của tình thế với hoài bão bước đầu thực thi thể chế Quân chủ lập hiến đặt nền móng cho mô hình “Dân chủ Đại nghị” cổ điển về sau, của lớp nhân sĩ tri thức cũ biết lường trước hoạ binh đao nên tha thiết nhân nhượng, dung hoà.\r\n\r\nViệt Nam sử lược (chữ Hán: 越南史略) là tác phẩm do nhà sử học Trần Trọng Kim biên soạn năm 1919. Sách được xuất bản lần đầu tiên vào năm 1920 và được tái bản rất nhiều lần, có lúc đã được dùng làm sách giáo khoa dưới thời Pháp thuộc và Việt Nam Cộng hòa cho tới năm 1975, về sau vẫn tiếp tục được tái bản [xem thêm].\r\n\r\nNội dung bộ Việt Nam Sử Lược của Trần Trọng Kim\r\nTác phẩm này là cuốn sách lịch sử Việt Nam đầu tiên viết bằng chữ quốc ngữ, hệ thống lại toàn bộ lịch sử nước Việt (cho đến thời Pháp thuộc). Nó là cuốn sách sử Việt đầu tiên thoát khỏi truyền thống viết sử theo lối biên niên, cương mục, ngôn từ khó hiểu của sách sử Việt thời phong kiến, nên được giới bình dân đón nhận do ngắn gọn, súc tích và dễ hiểu.\r\n\r\nVới Việt Nam sử lược, sử học Việt Nam lần đầu tiên có một công trình thoát ly được khỏi lối chép sử biên niên truyền thống của Trung Quốc vốn chỉ nêu lên từng sự kiện riêng lẻ, rời rạc. Việt Nam sử lược trình bày các diễn biến lịch sử thành một câu chuyện liên tục và hấp dẫn, cho người đọc thấy được mối liên lạc nhân quả, biện chứng giữa các sự kiện xảy ra theo dòng thời gian.\r\n\r\nNgoài ra, khác với lối chép sử của các sử thần thời phong kiến thường chỉ chú ý ghi chép hành vi, hoạt động của vua chúa quan lại, những cuộc tranh bá đồ vương, Việt Nam sử lược trái lại đã bắt đầu chú ý nhiều đến những sự kiện liên quan đời sống thực tế của dân chúng, sinh hoạt của xã hội, phong tục, tín ngưỡng, v.v… Tất cả đều được thể hiện với một thái độ điềm tĩnh, khách quan, và công bằng đúng như một sử gia cần có.\r\n\r\nTuy nhiên, về mặt chuyên môn, do biên soạn trong thời gian quá ngắn, lại chỉ do một mình Trần Trọng Kim biên soạn nên sách cũng có nhiều chi tiết sai sót, gây hiểu lầm cho người đọc; về sau tác giả đã 2 lần hiệu đính lại nhưng vẫn còn rất nhiều sai sót (phần lớn người đọc cuốn sách này là dân thường, chỉ có kiến thức sơ lược về lịch sử nên không nhận ra những lỗi sai đó, có một dạo cuốn sách còn từng được dùng làm sách giáo khoa nên đã dẫn đến nhiều hiểu lầm về lịch sử trong người dân).\r\n\r\nMặt khác, sách viết vào thời Pháp thuộc nên chịu sự khống chế của thực dân Pháp, Trần Trọng Kim lại là người có tư tưởng phong kiến bảo hoàng cực đoan, do vậy sách có nhiều đánh giá sai hoặc thiếu khách quan về các nhân vật, sự kiện, triều đại.\r\n', b'0000000000000000000000000000000000000000000000000000000000110001', 6, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kich_hoat` bit(64) NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vai_tro` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin', '123', 'nguyễn văn chính', b'0000000000000000000000000000000000000000000000000000000000000000', 'anh1.jpg', 'minhthang.hoang.52206', b'0000000000000000000000000000000000000000000000000000000000000000'),
('admin1', '123', 'Nguyễn Tiến Lợi', b'0000000000000000000000000000000000000000000000000000000000000000', 'user.png', 'huonggsociu@gmail.com', b'0000000000000000000000000000000000000000000000000000000000000000'),
('loi111111', '1234567', 'Nguyễn Tiến Lợi', b'0000000000000000000000000000000000000000000000000000000000000000', 'hinh-nen-anime-cho-may-tinh-1-1.jpg', 'tienloinguyen1510@gmail.com', b'0000000000000000000000000000000000000000000000000000000000000000'),
('loint11331', '1234567', 'Nguyễn Tiến Lợi', b'0000000000000000000000000000000000000000000000000000000000000000', 'a1.jpg', 'tienloinguyen1510@gmail.com', b'0000000000000000000000000000000000000000000000000000000000000000'),
('loiphp11331', '1234', 'nguyentienloi', b'0000000000000000000000000000000000000000000000000000000000000000', 'user.png', 'tienloinguyen1510@gmail.com', b'0000000000000000000000000000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(12, 'sach'),
(13, 'chuyện tranh'),
(14, 'sách trinh thám'),
(15, 'chuyện ngụ ngôn'),
(16, 'Văn học'),
(17, 'lịch sử');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_hanghoa` (`ma_hh`),
  ADD KEY `fk_khachhang` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
