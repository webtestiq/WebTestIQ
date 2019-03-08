-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2019 lúc 06:58 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtestiq`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `key_ans` int(11) NOT NULL,
  `MaCHoi` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `DAchinhxac` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn5` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DAn6` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`key_ans`, `MaCHoi`, `DAchinhxac`, `DAn1`, `DAn2`, `DAn3`, `DAn4`, `DAn5`, `DAn6`) VALUES
(1, 'EQ1', '', 'Tiếp tục đọc sách, xem phim, nghe nhạc,…. Nói chung không quan tâm.', 'Trở nên thận trọng, cẩn thận nghe các tiếp viên hàng không hướng dẫn trong trường hợp khẩn cấp.', 'Một chút từ cả A và B.', 'Không biết nữa.', NULL, NULL),
(2, 'EQ2', '', 'Đứng ngoài và để bọn trẻ tự giải quyết.', 'Nói chuyện với cô bé và tìm cách để đám trẻ kia chơi chung với bạn mình.', 'Nhẹ nhàng bảo cô bé nín khóc.', 'Chỉ cho cô bé những thứ khác mà cô bé có thể chơi.', NULL, NULL),
(3, 'EQ3', '', 'Lập ra một kế hoạch học tập cụ thể nhằm cải thiện điểm và quyết tâm thực hiện nó.', 'Quyết tâm làm tốt hơn trong tương lai.', 'Bảo với bản thân rằng chả sao cả, thay vào đó bạn sẽ tập trung vào những lớp có điểm số khá hơn.', 'Thuyết phục thầy giáo để có điểm số tốt hơn.', NULL, NULL),
(4, 'EQ4', '', 'Thế là đủ cho ngày hôm nay và hy vọng ngày mai sẽ tươi sáng hơn.', 'b.	Đánh giá những khuyết điểm của mình và tìm ra những cái mà bạn cho rằng đã phá hoại cuộc trò chuyện.', 'Thử một cách tiếp cận mới trong cuộc gọi kế và luôn luôn cố gắng.', 'Cân nhắc tìm một công việc khác.', NULL, NULL),
(5, 'EQ5', '', 'Kệ. Đùa thôi mà.', 'Gọi người đó vào văn phòng và quở trách.', 'Can thiệp ngay lập tức, bảo rằng câu chuyện đó không phù hợp ở đây và hành động này sẽ không được bỏ qua trong tổ chức bạn quản lý.', 'Bảo người đó tham dự một khóa đào tạo về sự bình đẳng.', NULL, NULL),
(6, 'EQ6', '', 'Bảo anh ấy quên đi, chẳng có ai bị thương cả và chuyện nào không có gì to tát.', 'Bật các bài hát anh ấy thích để “hạ hỏa”.', 'Cùng với anh ấy gây lộn với người tài xế kia.', 'Kể với anh ấy rằng bạn cũng đã ở trong trường hợp này và bạn cũng tức giận như vậy nhưng rồi  bạn thấy người tài xế đó đang trên đường tới phòng cấp cứu.', NULL, NULL),
(7, 'EQ7', '', 'Nghỉ 20 phút rồi tiếp tục nói chuyện với nhau.', 'Dừng vụ cãi nhau và giữ im lặng mặc cho người kia nói gì.', 'Bảo rằng bạn xin lỗi nhưng người kia cũng phải xin lỗi bạn.', 'Dừng một lúc, suy nghĩ thât thấu đáo và nêu rõ quan điểm của mình trong vụ việc.', NULL, NULL),
(8, 'EQ8', '', 'Vẽ ra một lịch trình làm việc và dành nhiều thời gian thảo luận ở từng mục nhằm sử dụng tốt nhất khoảng thời gian làm việc.', 'Cho mọi người thời gian để tìm hiểu lẫn nhau.', 'Bắt đầu hỏi ý kiến mọi người về vấn đề khi ý tưởng vẫn còn mới.', NULL, NULL, NULL),
(9, 'EQ9', '', 'Chấp nhận rằng con mình có bản tính nhút nhát và nghĩ cách che chở nó khỏi những thứ ấy.', 'Dẫn nó đi bác sĩ tâm lý.', 'Dẫn nó đi đến những nơi lạ và gặp gỡ mọi người để giúp con mình vượt qua nỗi sợ.', 'Thiết kế một chuỗi những thử thách đem đến những trải nghiệm mà sẽ dạy con bạn cách đối phó với nỗi sợ.', NULL, NULL),
(10, 'EQ10', '', 'Đưa mình vào một thời khóa biểu nghiêm túc mỗi ngày.', 'Chọn những phần nâng cao kỹ năng một chút.', 'Chỉ luyện tập khi có hứng.', 'Chọn phần mà vượt quá khả năng của mình, nhưng bạn có thể vượt qua nếu nỗ lực.', NULL, NULL),
(11, 'IQTD1', '', '5, 9', '7, 8', '8, 11', '6, 10', '6, 11', '5, 10'),
(12, 'IQTD2', '', 'Cọp', 'Mèo', 'Khỉ', 'Gấu Trắng', 'Chim cánh cụt', 'Chim bồ câu'),
(13, 'IQTD3', '', '863511241', '86351741', '86351714', '86331741', '68537114', '88351741'),
(14, 'IQTD4', '', '20', '21', '22', '23', '24', '25'),
(15, 'IQTD5', '', 'IQTD5-1.png', 'IQTD5-2.png', 'IQTD5-3.png', 'IQTD5-4.png', 'IQTD5-5.png', 'IQTD5-6.png'),
(16, 'IQTD6', '', '50%', '60%', '66.67%', '53.33%', '100%', '150%'),
(17, 'IQTD7', '', '1', '2', '3', '4', '5', '8'),
(18, 'IQTD8', '', 'Đúng', 'Sai', 'Có thể đúng hoặc sai', 'Tôi không biết hoặc đáp án khác', NULL, NULL),
(19, 'IQTD9', '', 'Mặt Trời', 'Sao Kim', 'Sao Băng', 'Mặt Trăng', 'Ngôi sao', 'Sao Hỏa'),
(20, 'IQTD10', '', '10', '13', '16', '20', '23', '26'),
(21, 'IQTD11', '', '69876988', '69877698', '69877689', '68967989', '69877698', '68966987'),
(22, 'IQTD12', '', '108 lần', '121 lần', '144 lần', '168 lần', '196 lần', '225 lần'),
(23, 'IQTD13', '', '49179576574224', '49179567752132', '49179576574223', '49175975764223', '49179576574232', '49179565574223'),
(24, 'IQTD14', '', 'IQTD14-1.png', 'IQTD14-2.png', 'IQTD14-3.png', 'IQTD14-4.png', 'IQTD14-5.png', 'IQTD14-6.png'),
(25, 'IQTD15', '', 'IQTD15-1.png', 'IQTD15-2.png', 'IQTD15-3.png', 'IQTD15-4.png', 'IQTD15-5.png', 'IQTD15-6.png'),
(26, 'IQTD16', '', '10', '50', '124', '200', '1600', '2000'),
(27, 'IQTD17', '', 'IQTD17-1.png', 'IQTD17-2.png', 'IQTD17-3.png', 'IQTD17-4.png', 'IQTD17-5.png', 'IQTD17-6.png'),
(28, 'IQTD18', '', 'IQTD18-1.png', 'IQTD18-2.png', 'IQTD18-3.png', 'IQTD18-4.png', 'IQTD18-5.png', 'IQTD18-6.png'),
(29, 'IQTD19', '', '3 cái', '5 cái', '7 cái', '8 cái', '9 cái', '10 cái'),
(30, 'IQTD20', '', '13', '15', '17', '179', NULL, NULL),
(31, 'IQTD21', '', 'IQTD21-1.png', 'IQTD21-2.png', 'IQTD21-3.png', 'IQTD21-4.png', 'IQTD21-5.png', 'IQTD21-6.png'),
(32, 'IQTD22', '', 'IQTD22-1.png', 'IQTD22-2.png', 'IQTD22-3.png', 'IQTD22-4.png', NULL, NULL),
(33, 'IQTD23', '', 'IQTD23-1.png', 'IQTD23-2.png', 'IQTD23-3.png', 'IQTD23-4.png', 'IQTD23-5.png', 'IQTD23-6.png'),
(34, 'IQTD24', '', 'IQTD24-1.png', 'IQTD24-2.png', 'IQTD24-3.png', 'IQTD24-4.png', NULL, NULL),
(35, 'IQTD25', '', '2 quả', '4 quả', '6 quả', '8 quả', '10 quả', '12 quả'),
(36, 'IQTD26', '', 'A, F', 'A, D', 'B, F', 'A, D', 'A, C', 'B, E'),
(37, 'IQTD27', '', 'IQTD27-1.png', 'IQTD27-2.png', 'IQTD27-3.png', 'IQTD27-4.png', 'IQTD27-5.png', 'IQTD27-6.png'),
(38, 'IQTD28', '', 'IQTD28-1.png', 'IQTD28-2.png', 'IQTD28-3.png', 'IQTD28-4.png', 'IQTD28-5.png', 'IQTD28-6.png'),
(39, 'IQTD29', '', 'IQTD29-1.png', 'IQTD29-2.png', 'IQTD29-3.png', 'IQTD29-4.png', 'IQTD29-5.png', 'IQTD29-6.png'),
(40, 'IQTD30', '', 'IQTD30-1.png', 'IQTD30-2.png', 'IQTD30-3.png', 'IQTD30-4.png', 'IQTD30-5.png', 'IQTD30-6.png'),
(41, 'IQTD31', '', 'IQTD31-1.png', 'IQTD31-2.png', 'IQTD31-3.png', 'IQTD31-4.png', 'IQTD31-5.png', 'IQTD31-6.png'),
(42, 'IQTD32', '', 'IQTD32-1.png', 'IQTD32-2.png', 'IQTD32-3.png', 'IQTD32-4.png', 'IQTD32-5.png', 'IQTD32-6.png'),
(43, 'TC1', '', 'Xã hội, giao tiếp.', 'Thiết kế, nghiên cứu.', NULL, NULL, NULL, NULL),
(44, 'TC2', '', 'Khách quan.', 'Chủ quan.', NULL, NULL, NULL, NULL),
(45, 'TC3', '', 'Ý nghĩa, giá trị.', 'Tính logic.', NULL, NULL, NULL, NULL),
(46, 'TC4', '', 'Thong thả, thoải mái.', 'Nhanh nhẹn, đúng giờ.', NULL, NULL, NULL, NULL),
(47, 'TC5', '', 'Bắt đầu cho cuộc nói chuyện.', 'Chỉ nói khi người khác bắt chuyện.', NULL, NULL, NULL, NULL),
(48, 'TC6', '', 'Là người có cái đầu lạnh.', 'Là người có trái tim ấm.', NULL, NULL, NULL, NULL),
(49, 'TC7', '', 'Dễ chịu, thoải mái.', 'Nghiêm chỉnh, quả quyết.', NULL, NULL, NULL, NULL),
(50, 'TC8', '', 'Khá thú vị.', 'Khó hiểu', NULL, NULL, NULL, NULL),
(51, 'TC9', '', 'Dễ dàng bắt chuyện và trò chuyện nhiều điều cùng họ.', 'Cảm thấy khó khăn và không biết nên nói gì.', NULL, NULL, NULL, NULL),
(52, 'TC10', '', 'Không có quy trình cụ thể.', 'Thiếu tính sáng tạo.', NULL, NULL, NULL, NULL),
(53, 'TC11', '', 'Sự hòa hợp với mọi người.', 'Sự nhất quán trong suy nghĩ', NULL, NULL, NULL, NULL),
(54, 'TC12', '', 'Giàu trí tưởng tượng.', 'Nắm bắt tình huống tốt.', NULL, NULL, NULL, NULL),
(55, 'TC13', '', 'Dè dặt.', 'THoải mái.', NULL, NULL, NULL, NULL),
(56, 'TC14', '', 'Tuân theo chuẩn mực.', 'Đôi lúc không hiểu rõ nguyên nhân.', NULL, NULL, NULL, NULL),
(57, 'TC15', '', 'Không công bằng.', 'Tàn nhẫn.', NULL, NULL, NULL, NULL),
(58, 'TC16', '', 'Kiên quyết.', 'Nhẹ nhàng.', NULL, NULL, NULL, NULL),
(59, 'TC17', '', 'Độc lập giải quyết.', 'Trao đổi với mọi người.', NULL, NULL, NULL, NULL),
(60, 'TC18', '', 'Những điều bất ngờ không tính trước.', 'Những điều có kế hoặch trước.', NULL, NULL, NULL, NULL),
(61, 'TC19', '', 'Chắc chắn torng tư tưởng.', 'Cống hiến hết mình.', NULL, NULL, NULL, NULL),
(62, 'TC20', '', 'Khả năng lý luận phân tích.', 'Sự liên tưởng.', NULL, NULL, NULL, NULL),
(63, 'TC21', '', 'Ở nhà cùng gia đình.', 'Đi du lịch cùng bạn bè.', NULL, NULL, NULL, NULL),
(64, 'TC22', '', 'Các ngụ ý, hàm ý, ẩn ý.', 'Các nguyên tắc, nguyên lý.', NULL, NULL, NULL, NULL),
(65, 'TC23', '', 'Cảm nhận từ con tim.', 'Những quy tắc chung.', NULL, NULL, NULL, NULL),
(66, 'TC24', '', 'Làm việc có phương pháp, tổ chức tốt.', 'Ứng biến xoay trở tốt trước khó khăn.', NULL, NULL, NULL, NULL),
(67, 'TC25', '', 'Sự chắc chắn.', 'Sự cởi mở.', NULL, NULL, NULL, NULL),
(68, 'TC26', '', 'Công tư phân minh.', 'Bị tình cảm chi phối.', NULL, NULL, NULL, NULL),
(69, 'TC27', '', 'Nghệ thuật.', 'Khoa học.', NULL, NULL, NULL, NULL),
(70, 'TC28', '', 'Trầm lặng, ít nói.', 'Hoạt bát, vui vẻ.', NULL, NULL, NULL, NULL),
(71, 'TC29', '', 'Dựa vào vẻ ngoài của họ.', 'Dựa vào cảm nhận của bạn', NULL, NULL, NULL, NULL),
(72, 'TC30', '', 'Quá nồng nhiệt, mong chờ.', 'Quá khách quan.', NULL, NULL, NULL, NULL),
(73, 'TC31', '', 'Thích những thứ quen thuộc.', 'Thích những điều mới mẻ.', NULL, NULL, NULL, NULL),
(74, 'TC32', '', 'Tìm kiếm một cách làm mới.', 'Làm theo cách mọi người hay làm.', NULL, NULL, NULL, NULL),
(75, 'TC33', '', 'Độc lập.', 'Theo nhóm.', NULL, NULL, NULL, NULL),
(76, 'TC34', '', 'Hiếm khi.', 'Hay xảy ra.', NULL, NULL, NULL, NULL),
(77, 'TC35', '', 'Giàu lý trí.', 'Giàu cảm xúc.', NULL, NULL, NULL, NULL),
(78, 'TC36', '', 'Theo thứ tự.', 'Phát ngẫu nhiên.', NULL, NULL, NULL, NULL),
(79, 'TC37', '', 'Khéo léo, lanh lợi.', 'Thẳng thắn, thực tế', NULL, NULL, NULL, NULL),
(80, 'TC38', '', 'Sử dụng người khác.', 'Hiểu và chia sẻ với người khác.', NULL, NULL, NULL, NULL),
(81, 'TC39', '', 'Diễn đạt trực tiếp nhất có thể.', 'Diễn đạt một cách gián tiếp.', NULL, NULL, NULL, NULL),
(82, 'TC40', '', 'Tìm bạn bè tâm sự hoặc đi chơi.', 'Muốn ở một mình cho khuây khỏa.', NULL, NULL, NULL, NULL),
(83, 'TC41', '', 'Tham gia khi bị ép.', 'Năng nổ, tích cực.', NULL, NULL, NULL, NULL),
(84, 'TC42', '', 'Những thứ không xác định.', 'Những thứ có logic.', NULL, NULL, NULL, NULL),
(85, 'TC43', '', 'Dễ dàng nắm bắt.', 'Giấu kín, khó nhận biết.', NULL, NULL, NULL, NULL),
(86, 'TC44', '', 'Hành xử thiếu cân nhắc.', 'Chỉ trích, phê phán người khác.', NULL, NULL, NULL, NULL),
(87, 'TC45', '', 'Chuẩn bị chu toàn trước.', 'Diễn ra tự nhiên.', NULL, NULL, NULL, NULL),
(88, 'TC46', '', 'Dễ gần, hòa đồng.', 'Thân thiện nhưng kín đáo.', NULL, NULL, NULL, NULL),
(89, 'TC47', '', 'Trí tưởng tượng phong phú.', 'Sự quan sát thực tế.', NULL, NULL, NULL, NULL),
(90, 'TC48', '', 'Linh cảm.', 'Sự việc thực tế.', NULL, NULL, NULL, NULL),
(91, 'TC49', '', 'Bạn là người có đầu óc suy luận.', 'Bạn là người giàu tình cảm và sự tinh tế.', NULL, NULL, NULL, NULL),
(92, 'TC50', '', 'Có chọn lựa và suy tính.', 'Một cách tự nhiên', NULL, NULL, NULL, NULL),
(93, 'TC51', '', 'Bộc phát, linh hoạt.', 'Kỹ lưỡng, cẩn thận.', NULL, NULL, NULL, NULL),
(94, 'TC52', '', 'Tình cảm dồi dào.', 'Lý trí mạnh mẽ.', NULL, NULL, NULL, NULL),
(95, 'TC53', '', 'Mơ mộng và tưởng tượng.', 'Thực tế và thực dụng.', NULL, NULL, NULL, NULL),
(96, 'TC54', '', 'Nhấc máy trước để nghe.', 'Để cho đồng nghiệp nhấc máy.', NULL, NULL, NULL, NULL),
(97, 'TC55', '', 'Cố làm quen với nhiều người.', 'Chỉ nói chuyện với vài người.', NULL, NULL, NULL, NULL),
(98, 'TC56', '', 'Bản thân nó giải thích cho chính nó.', 'Là bằng chứng giải thích cho các quy tắc, quy luật.', NULL, NULL, NULL, NULL),
(99, 'TC57', '', 'Đa sầu đa cảm.', 'Thực dụng, không bị chi phối bởi tình cảm.', NULL, NULL, NULL, NULL),
(100, 'TC58', '', 'Những suy nghĩ của họ.', 'Những gì họ làm được.', NULL, NULL, NULL, NULL),
(101, 'TC59', '', 'Thói quen.', 'Những điều mới mẻ.', NULL, NULL, NULL, NULL),
(102, 'TC60', '', 'Luôn được chuẩn bị kỹ lưỡng.', 'Tùy cơ ứng biến.', NULL, NULL, NULL, NULL),
(103, 'TC61', '', 'Ít bạn nhưng chơi rất thân.', 'Nhiều bạn nhưng không thân thiết lắm.', NULL, NULL, NULL, NULL),
(104, 'TC62', '', 'Diễn đạt lời văn qua các phép so sánh, ẩn dụ.', 'Nghĩ sao viết vậy, diễn đạt rõ ràng.', NULL, NULL, NULL, NULL),
(105, 'TC63', '', 'Phụ thuộc vào tâm trạng.', 'Suy tính cẩn trọng.', NULL, NULL, NULL, NULL),
(106, 'TC64', '', 'Một cách chắc chắn.', 'Không chắc lắm, có thể thay đổi sau.', NULL, NULL, NULL, NULL),
(107, 'TC65', '', 'Nguyên tắc, lý trí.', 'Cảm xúc, tình cảm.', NULL, NULL, NULL, NULL),
(108, 'TC66', '', 'Thực tế.', 'Bất ngờ, mới mẻ.', NULL, NULL, NULL, NULL),
(109, 'TC67', '', 'Không hứng thú.', 'Hào hứng.', NULL, NULL, NULL, NULL),
(110, 'TC68', '', 'Kiểm tra lại trước khi áp dụng.', 'Tin tưởng và áp dụng theo.', NULL, NULL, NULL, NULL),
(111, 'TC69', '', 'Những thứ có tính logic cao.', 'Những thứ gây cảm động.', NULL, NULL, NULL, NULL),
(112, 'TC70', '', 'Những thứ thực tế và rõ ràng.', 'Những suy đoán.', NULL, NULL, NULL, NULL),
(113, 'TC71', '', 'Không thoải mái.', 'Thích thú.', NULL, NULL, NULL, NULL),
(114, 'TC72', '', 'Hoàn cảnh nhất định.', 'Nguyên tắc chung.', NULL, NULL, NULL, NULL),
(115, 'TC73', '', 'Ra về sớm vì không hào hứng lắm.', 'Vui chơi hết mình cho đến khi tàn tiệc.', NULL, NULL, NULL, NULL),
(116, 'TC74', '', 'Tuân thủ thời gian.', 'Làm việc tùy hứng.', NULL, NULL, NULL, NULL),
(117, 'TC75', '', 'Trò chuyện cùng nhiều người, quen hoặc không quen.', 'Chỉ trò chuyện với một số người quen.', NULL, NULL, NULL, NULL),
(118, 'TC76', '', 'Những thứ mơ hồ, không rõ ràng.', 'Những thứ nhàm chán, tẻ nhạt.', NULL, NULL, NULL, NULL),
(119, 'IQ1', '', 'IQ1-1.png', 'IQ1-2.png', 'IQ1-3.png', 'IQ1-4.png', 'IQ1-5.png', 'IQ1-6.png'),
(120, 'IQ2', '', 'IQ2-1.png', 'IQ2-2.png', 'IQ2-3.png', 'IQ2-4.png', 'IQ2-5.png', 'IQ2-6.png'),
(121, 'IQ3', '', 'IQ3-1.png', 'IQ3-2.png', 'IQ3-3.png', 'IQ3-4.png', 'IQ3-5.png', 'IQ3-6.png'),
(122, 'IQ4', '', 'IQ4-1.png', 'IQ4-2.png', 'IQ4-3.png', 'IQ4-4.png', 'IQ4-5.png', 'IQ4-6.png'),
(123, 'IQ5', '', 'IQ5-1.png', 'IQ5-2.png', 'IQ5-3.png', 'IQ5-4.png', 'IQ5-5.png', 'IQ5-6.png'),
(124, 'IQ6', '', 'IQ6-1.png', 'IQ6-2.png', 'IQ6-3.png', 'IQ6-4.png', 'IQ6-5.png', 'IQ6-6.png'),
(125, 'IQ7', '', 'IQ7-1.png', 'IQ7-2.png', 'IQ7-3.png', 'IQ7-4.png', 'IQ7-5.png', 'IQ7-6.png'),
(126, 'IQ8', '', 'IQ8-1.png', 'IQ8-2.png', 'IQ8-3.png', 'IQ8-4.png', 'IQ8-5.png', 'IQ8-6.png'),
(127, 'IQ9', '', 'IQ9-1.png', 'IQ9-2.png', 'IQ9-3.png', 'IQ9-4.png', 'IQ9-5.png', 'IQ9-6.png'),
(128, 'IQ10', '', 'IQ10-1.png', 'IQ10-2.png', 'IQ10-3.png', 'IQ10-4.png', 'IQ10-5.png', 'IQ10-6.png'),
(129, 'IQ11', '', 'IQ11-1.png', 'IQ11-2.png', 'IQ11-3.png', 'IQ11-4.png', 'IQ11-5.png', 'IQ11-6.png'),
(130, 'IQ12', '', 'IQ12-1.png', 'IQ12-2.png', 'IQ12-3.png', 'IQ12-4.png', 'IQ12-5.png', 'IQ12-6.png'),
(131, 'IQ13', '', 'IQ13-1.png', 'IQ13-2.png', 'IQ13-3.png', 'IQ13-4.png', 'IQ13-5.png', 'IQ13-6.png'),
(132, 'IQ14', '', 'IQ14-1.png', 'IQ14-2.png', 'IQ14-3.png', 'IQ14-4.png', 'IQ14-5.png', 'IQ14-6.png'),
(133, 'IQ15', '', 'IQ15-1.png', 'IQ15-2.png', 'IQ15-3.png', 'IQ15-4.png', 'IQ15-5.png', 'IQ15-6.png'),
(134, 'IQ16', '', 'IQ16-1.png', 'IQ16-2.png', 'IQ16-3.png', 'IQ16-4.png', 'IQ16-5.png', 'IQ16-6.png'),
(135, 'IQ17', '', 'IQ17-1.png', 'IQ17-2.png', 'IQ17-3.png', 'IQ17-4.png', 'IQ17-5.png', 'IQ17-6.png'),
(136, 'IQ18', '', 'IQ18-1.png', 'IQ18-2.png', 'IQ18-3.png', 'IQ18-4.png', 'IQ18-5.png', 'IQ18-6.png'),
(137, 'IQ19', '', 'IQ19-1.png', 'IQ19-2.png', 'IQ19-3.png', 'IQ19-4.png', 'IQ19-5.png', 'IQ19-6.png'),
(138, 'IQ20', '', 'IQ20-1.png', 'IQ20-2.png', 'IQ20-3.png', 'IQ20-4.png', 'IQ20-5.png', 'IQ20-6.png'),
(139, 'IQ21', '', 'IQ21-1.png', 'IQ21-2.png', 'IQ21-3.png', 'IQ21-4.png', 'IQ21-5.png', 'IQ21-6.png'),
(140, 'IQ22', '', 'IQ22-1.png', 'IQ22-2.png', 'IQ22-3.png', 'IQ22-4.png', 'IQ22-5.png', 'IQ22-6.png'),
(141, 'IQ23', '', 'IQ23-1.png', 'IQ23-2.png', 'IQ23-3.png', 'IQ23-4.png', 'IQ23-5.png', 'IQ23-6.png'),
(142, 'IQ24', '', 'IQ24-1.png', 'IQ24-2.png', 'IQ24-3.png', 'IQ24-4.png', 'IQ24-5.png', 'IQ24-6.png'),
(143, 'IQ25', '', 'IQ25-1.png', 'IQ25-2.png', 'IQ25-3.png', 'IQ25-4.png', 'IQ25-5.png', 'IQ25-6.png'),
(144, 'IQ26', '', 'IQ26-1.png', 'IQ26-2.png', 'IQ26-3.png', 'IQ26-4.png', 'IQ26-5.png', 'IQ26-6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bxh`
--

CREATE TABLE `bxh` (
  `STT` int(11) DEFAULT NULL,
  `MaTTich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `MaCHoi` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `MaTests` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `STT` int(11) DEFAULT NULL,
  `Noidung` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`MaCHoi`, `MaTests`, `STT`, `Noidung`) VALUES
('EQ1', 'EQ', 1, 'Bạn ở trên một chuyến bay và máy bay đột nhiên rung lắc dữ dội. Bạn sẽ làm gì?'),
('EQ10', 'EQ', 10, 'Trong nhiều năm bạn muốn học lại một nhạc cụ mà bạn từng thử chơi khi còn bé. Bây giờ, vui là chính, bạn bắt đầu và bạn muốn sử dụng thời gian học một cách hiệu quả nhất. Bạn sẽ làm gì?'),
('EQ2', 'EQ', 2, 'Bạn đưa một nhóm trẻ 4 tuổi đến công viên, một bé gái trong số đó bắt đầu khóc bởi vì đám trẻ không chịu chơi với nó. Bạn sẽ làm gì?'),
('EQ3', 'EQ', 3, 'Tưởng tượng rằng bạn là một sinh viên với một hy vọng nhỏ nhoi là được điểm A trong một môn học. Nhưng bạn vừa phát hiện ra là giữa kỳ được có C-. Bạn sẽ lam gì?'),
('EQ4', 'EQ', 4, 'Tưởng tượng rằng bạn là một nhân viên bán bảo hiểm gọi điện cho các khách hàng tiềm năng của mình. 15 người liên tiếp cúp máy giữa chừng và bạn bắt đầu cảm thấy nản. Bạn sẽ làm gì?'),
('EQ5', 'EQ', 5, 'Bạn là người quản lý trong một tổ chức kêu gọi cho sự bình đẳng chủng tộc và tôn giáo. Bạn tình cờ nghe được một người kể một câu chuyện hài phân biệt chủng tộc. Bạn sẽ làm gì?'),
('EQ6', 'EQ', 6, 'Bạn đang cố gắng ngăn cản một người bạn cãi nhau với một người khác vì anh này vừa cắt ngang đầu xe của các bạn. Bạn sẽ làm gì?'),
('EQ7', 'EQ', 7, 'Bạn và người bạn đời của mình cãi nhau và rồi to tiếng với nhau. Cả hai người đều đang rất ức chế, trong cơn nóng giận, các bạn đã xúc phạm nhau. Bạn nghĩ điều tốt nhất nên làm ở đây là gì?'),
('EQ8', 'EQ', 8, 'Bạn được chỉ định lãnh đạo một nhóm đang cố tìm ra một phương pháp sáng tạo cho một vấn đề ở công ty. Đầu tiên bạn sẽ làm gì?'),
('EQ9', 'EQ', 9, 'Đứa con trai 3 tuổi của bạn cực kỳ nhút nhát, đa cảm và pha lẫn một chú sợt sệt khi đến những nơi mới và trước người lạ hầu như từ khi mới sinh ra. Bạn sẽ làm gì?'),
('IQ1', 'IQ', 1, 'IQ1.png'),
('IQ10', 'IQ', 10, 'IQ10.png'),
('IQ11', 'IQ', 11, 'IQ11.png'),
('IQ12', 'IQ', 12, 'IQ12.png'),
('IQ13', 'IQ', 13, 'IQ13.png'),
('IQ14', 'IQ', 14, 'IQ14.png'),
('IQ15', 'IQ', 15, 'IQ15.png'),
('IQ16', 'IQ', 16, 'IQ16.png'),
('IQ17', 'IQ', 17, 'IQ17.png'),
('IQ18', 'IQ', 18, 'IQ18.png'),
('IQ19', 'IQ', 19, 'IQ19.png'),
('IQ2', 'IQ', 2, 'IQ2.png'),
('IQ20', 'IQ', 20, 'IQ20.png'),
('IQ21', 'IQ', 21, 'IQ21.png'),
('IQ22', 'IQ', 22, 'IQ22.png'),
('IQ23', 'IQ', 23, 'IQ23.png'),
('IQ24', 'IQ', 24, 'IQ24.png'),
('IQ25', 'IQ', 25, 'IQ25.png'),
('IQ26', 'IQ', 26, 'IQ26.png'),
('IQ3', 'IQ', 3, 'IQ3.png'),
('IQ4', 'IQ', 4, 'IQ4.png'),
('IQ5', 'IQ', 5, 'IQ5.png'),
('IQ6', 'IQ', 6, 'IQ6.png'),
('IQ7', 'IQ', 7, 'IQ7.png'),
('IQ8', 'IQ', 8, 'IQ8.png'),
('IQ9', 'IQ', 9, 'IQ9.png'),
('IQTD1', 'IQTD', 1, 'Điền số thích hợp vào dấu chấm hỏi : 0, 2, 4, ?, 8, ?, 12'),
('IQTD10', 'IQTD', 10, 'Hai người cùng xuất phát ở một điểm, quay lưng vào nhau, cùng đi về phía trước 12m rồi rẽ trái 5m. Hỏi khoảng cách giữa 2 người lúc này là?'),
('IQTD11', 'IQTD', 11, 'Nếu EGGFHGHE giống như 97786769 thì HEFGGHFE giống như'),
('IQTD12', 'IQTD', 12, 'Bạn có 84 quả táo đựng trong 12 rổ, nếu muốn ăn 1/3 số táo trong mỗi rổ thì bạn cần ít nhất bao nhiêu lần cắn, biết rằng mỗi lần bạn cắn được 1/3 của 1/2 quả táo.'),
('IQTD13', 'IQTD', 13, 'Nếu đọc ngược lại thì số 32247567597194 sẽ là số:'),
('IQTD14', 'IQTD', 14, 'IQTD14.png'),
('IQTD15', 'IQTD', 15, 'IQTD15.png'),
('IQTD16', 'IQTD', 16, 'Hân thích số 25 nhưng không thích 24, thích 400 nhưng không thích 300, thích 144 nhưng không thích 145. Hỏi Hân sẽ thích số nào sau đây:'),
('IQTD17', 'IQTD', 17, 'IQTD17.png'),
('IQTD18', 'IQTD', 18, 'IQTD18.png'),
('IQTD19', 'IQTD', 19, '8 người sơn được 3 cái nhà trong 6 giờ. Hỏi với 12 người sẽ sơn được bao nhiêu cái nhà trong 12 giờ?'),
('IQTD2', 'IQTD', 2, 'Tìm con vật khác biệt rõ rệt với những con còn lại: Cọp, mèo, khỉ, gấu trắng , chim cánh cụt, chim bồ câu.'),
('IQTD20', 'IQTD', 20, 'Số nào không thuộc dãy sau đây: 13, 15, 17, 19'),
('IQTD21', 'IQTD', 21, 'IQTD21.png'),
('IQTD22', 'IQTD', 22, 'IQTD22.png'),
('IQTD23', 'IQTD', 23, 'IQTD23.png'),
('IQTD24', 'IQTD', 24, 'IQTD24.png'),
('IQTD25', 'IQTD', 25, 'Lan hôm nay đi chợ lần đầu, mẹ cô dặn mua cho bà một ít quả LÊ và với số tiền cho trước là 23 000 đồng. Hỏi với số tiền được cho, Lan mua được nhiều nhất mấy quả LÊ? Biết rằng: +) TÁO + TÁO + LÊ+ ĐÀO = 23 000 đồng +) ĐÀO + TÁO + CAM+ TÁO = 22 000 đồng +) TÁO + CAM + TÁO + TÁO = 16 000 đồng +) TÁO + TÁO + TÁO + TÁO =12 000 đồng'),
('IQTD26', 'IQTD', 26, 'Điền vào chỗ trống: A, D, A, E, I, ?, F, ?, C, E'),
('IQTD27', 'IQTD', 27, 'IQTD27.png'),
('IQTD28', 'IQTD', 28, 'IQTD28.png'),
('IQTD29', 'IQTD', 29, 'IQTD29.png'),
('IQTD3', 'IQTD', 3, 'Nếu TESTIQVN là NVQITSET thì 14715368 là:'),
('IQTD30', 'IQTD', 30, 'IQTD30.png'),
('IQTD31', 'IQTD', 31, 'IQTD31.png'),
('IQTD32', 'IQTD', 32, 'IQTD32.png'),
('IQTD4', 'IQTD', 4, 'Hiện nay Mark Zuckerberg 31 tuổi , 9 năm nữa tuổi anh ấy gấp đôi tuổi em gái mình hiện tại . Hỏi bây giờ tuổi em gái Mark là bao nhiêu ?'),
('IQTD5', 'IQTD', 5, 'IQTD5.png'),
('IQTD6', 'IQTD', 6, 'Một sản phẩm được hạ giá 60%, hỏi sản phẩm đó phải tăng giá lên bao nhiêu % để trở về giá ban đầu?'),
('IQTD7', 'IQTD', 7, 'Số nào không thuộc dãy sau đây: 1, 1, 2, 3, 4, 5, 8, 13, 21'),
('IQTD8', 'IQTD', 8, 'Nếu tất cả Ross là Hanoon và tất cả Hanoon là Oxy thì Ross là Oxy'),
('IQTD9', 'IQTD', 9, 'Cái nào không cùng loại với những cái còn lại: Mặt Trời, sao Kim, sao băng, Mặt Trăng, ngôi sao, sao Hỏa.'),
('TC1', 'TC', 1, 'Bạn thích công việc kiểu :'),
('TC10', 'TC', 10, 'Một công việc gây nhàm chán khi:'),
('TC11', 'TC', 11, 'Bạn bị hấp dẫn bởi :'),
('TC12', 'TC', 12, 'Bạn bị lôi cuốn bởi kiểu người :'),
('TC13', 'TC', 13, 'Trong các cuộc trò chuyện bạn thường :'),
('TC14', 'TC', 14, 'Lựa chọn của bạn có xu hướng :'),
('TC15', 'TC', 15, 'Trong hai điều sau, điều nào tồi tệ hơn:'),
('TC16', 'TC', 16, 'Tính cách nào giống bạn hơn :'),
('TC17', 'TC', 17, 'Đối với một vấn đề trong nhóm :'),
('TC18', 'TC', 18, 'Trong cuộc sống, bạn cảm thấy hứng thú với :'),
('TC19', 'TC', 19, 'Bạn thấy tâm đắc với bản thân bởi sự'),
('TC2', 'TC', 2, 'Bạn tiếp xúc với một người theo xu hướng :'),
('TC20', 'TC', 20, 'Bạn nhìn nhận một vấn đề với :'),
('TC21', 'TC', 21, 'Trong các kỳ nghỉ lễ bạn có xu hướng :'),
('TC22', 'TC', 22, 'Bạn bị lôi cuốn bởi :'),
('TC23', 'TC', 23, 'Khi quyết định việc gì bạn thường dựa vào :'),
('TC24', 'TC', 24, 'Bạn thích làm việc với người Sếp :'),
('TC25', 'TC', 25, 'Bạn nghiêng về :'),
('TC26', 'TC', 26, 'Bạn là người có tư tưởng :'),
('TC27', 'TC', 27, 'Bạn thích học các môn :'),
('TC28', 'TC', 28, 'Trong một nhóm bạn bè bạn thường :'),
('TC29', 'TC', 29, 'Khi đánh giá một người bạn thường :'),
('TC3', 'TC', 3, 'Bạn đánh giá sự việc dựa trên :'),
('TC30', 'TC', 30, 'Sẽ thật tai hại khi bạn :'),
('TC31', 'TC', 31, 'Phong cách của bạn :'),
('TC32', 'TC', 32, 'Khi giải quyết một công việc thông thường, bạn sẽ :'),
('TC33', 'TC', 33, 'Bạn thích làm việc :'),
('TC34', 'TC', 34, 'Bạn có hành động theo bản năng :'),
('TC35', 'TC', 35, 'Trong cuộc sống, một người sẽ tốt hơn nếu :'),
('TC36', 'TC', 36, 'Khi nghe một album nhạc mới, bạn thường nghe :'),
('TC37', 'TC', 37, 'Bạn là người :'),
('TC38', 'TC', 38, 'Sẽ khó khăn hơn khi bạn cố:'),
('TC39', 'TC', 39, 'Khi trình bày bạn thường :'),
('TC4', 'TC', 4, 'Bạn là người có tác phong :'),
('TC40', 'TC', 40, 'Khi cảm thấy buồn bạn thường :'),
('TC41', 'TC', 41, 'Đối với các hoạt động của cơ quan, lớp học :'),
('TC42', 'TC', 42, 'Bạn cảm thấy thoái mái với :'),
('TC43', 'TC', 43, 'Cảm xúc của bạn thường được người khác :'),
('TC44', 'TC', 44, 'Thật tồi tệ khi :'),
('TC45', 'TC', 45, 'Bạn muốn một sự kiện như thế nào :'),
('TC46', 'TC', 46, 'Bạn là người có tình cách :'),
('TC47', 'TC', 47, 'Bạn có ưu điểm về :'),
('TC48', 'TC', 48, 'Khi quyết định điều gì đó, bạn tin vào :'),
('TC49', 'TC', 49, 'Bạn muốn được người khác khen ngợi như thế nào :'),
('TC5', 'TC', 5, 'Trong các cuộc giao tiếp, bạn là người :'),
('TC50', 'TC', 50, 'Bạn thích các sự việc xảy ra :'),
('TC51', 'TC', 51, 'Bạn hay hành động một cách :'),
('TC52', 'TC', 52, 'Bạn muốn bổ sung thêm điều gì ở bản thân :'),
('TC53', 'TC', 53, 'Bạn là người :'),
('TC54', 'TC', 54, 'Khi điện thoại bàn trong văn phòng công ty đổ chuông :'),
('TC55', 'TC', 55, 'Bạn mới tham gia một lớp Ngoại ngữ :'),
('TC56', 'TC', 56, 'Theo bạn, các sự việc, sự kiện :'),
('TC57', 'TC', 57, 'Bạn là người :'),
('TC58', 'TC', 58, 'Bạn thường quan tâm tới người khác thông qua :'),
('TC59', 'TC', 59, 'Bạn nghiêng về điều nào sau đây :'),
('TC6', 'TC', 6, 'Bạn là người thế nào :'),
('TC60', 'TC', 60, 'Mọi việc sẽ tôt hơn nếu :'),
('TC61', 'TC', 61, 'Bạn thích mối quan hệ :'),
('TC62', 'TC', 62, 'Nếu bạn là nhà văn, bạn sẽ viết bài theo cách :'),
('TC63', 'TC', 63, 'Khi quyết định một việc :'),
('TC64', 'TC', 64, 'Bạn thường hay đưa ra quyết định :'),
('TC65', 'TC', 65, 'Bạn là người sống thiên về :'),
('TC66', 'TC', 66, 'Bạn thích thú với sự việc :'),
('TC67', 'TC', 67, 'Khi nói về một chủ đề mới lạ chưa gặp, bạn cảm thấy :'),
('TC68', 'TC', 68, 'Đối với một suy luận được nhiều người tin dùng, bạn sẽ :'),
('TC69', 'TC', 69, 'Điều gì làm cho bạn ấn tượng :'),
('TC7', 'TC', 7, 'Tính cách của bạn :'),
('TC70', 'TC', 70, 'Bạn là người có xu hướng thiên về :'),
('TC71', 'TC', 71, 'Ở một nơi đông người làm bạn :'),
('TC72', 'TC', 72, 'Bạn đánh giá một người dựa trên :'),
('TC73', 'TC', 73, 'Bạn được mời tới bữa tiệc của công ty :'),
('TC74', 'TC', 74, 'Khi làm việc bạn sẽ :'),
('TC75', 'TC', 75, 'Khi đi tham dự một buổi liên hoan/tiệc tùng, bạn sẽ :'),
('TC76', 'TC', 76, 'Điều gì làm bạn cảm thấy tồi tệ :'),
('TC8', 'TC', 8, 'Những người có tầm nhìn xa thường :'),
('TC9', 'TC', 9, 'Đối với những người mới gặp, bàn thường :');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tests`
--

CREATE TABLE `tests` (
  `MaTests` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenTests` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SLcau` int(11) NOT NULL,
  `Tgianlam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tests`
--

INSERT INTO `tests` (`MaTests`, `TenTests`, `SLcau`, `Tgianlam`) VALUES
('EQ', 'Test EQ', 10, 1200),
('IQ', 'Test IQ', 26, 1500),
('IQTD', 'Test IQ Tuyển Dụng', 32, 4800),
('TC', 'Test Tính cách', 76, 6000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtich`
--

CREATE TABLE `thanhtich` (
  `MaTTich` int(11) NOT NULL,
  `Diem` float DEFAULT NULL,
  `Ngaylam` datetime DEFAULT NULL,
  `TgianHT` int(11) DEFAULT NULL,
  `IDUser` int(11) NOT NULL,
  `MaTests` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `IDUser` int(11) NOT NULL,
  `Hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `Namsinh` int(11) DEFAULT NULL,
  `Nghenghiep` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sothich` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`key_ans`),
  ADD KEY `MaCHoi` (`MaCHoi`);

--
-- Chỉ mục cho bảng `bxh`
--
ALTER TABLE `bxh`
  ADD KEY `MaTTich` (`MaTTich`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`MaCHoi`),
  ADD KEY `MaTests` (`MaTests`);

--
-- Chỉ mục cho bảng `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`MaTests`);

--
-- Chỉ mục cho bảng `thanhtich`
--
ALTER TABLE `thanhtich`
  ADD PRIMARY KEY (`MaTTich`),
  ADD KEY `IDUser` (`IDUser`),
  ADD KEY `MaTests` (`MaTests`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `key_ans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`MaCHoi`) REFERENCES `questions` (`MaCHoi`);

--
-- Các ràng buộc cho bảng `bxh`
--
ALTER TABLE `bxh`
  ADD CONSTRAINT `bxh_ibfk_1` FOREIGN KEY (`MaTTich`) REFERENCES `thanhtich` (`MaTTich`);

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`MaTests`) REFERENCES `tests` (`MaTests`);

--
-- Các ràng buộc cho bảng `thanhtich`
--
ALTER TABLE `thanhtich`
  ADD CONSTRAINT `thanhtich_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IDUser`),
  ADD CONSTRAINT `thanhtich_ibfk_2` FOREIGN KEY (`MaTests`) REFERENCES `tests` (`MaTests`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
