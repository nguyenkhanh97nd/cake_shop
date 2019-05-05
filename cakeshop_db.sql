-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 03:29 PM
-- Server version: 5.7.18
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`) VALUES
(1, 'Sản phẩm', 'products', 'Chuyên mục Sản phẩm', 1),
(2, 'Tin tức', 'news', 'Chuyên mục tin tức', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `title`, `content`) VALUES
(1, 'Nguyen', 'kissmylovevn2@zing.vn', 'gas', 'fdsfkdsjf'),
(2, 'dasd', 'dsfjl@gail.com', 'fdj', 'fdsf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brief` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `subcategory_id` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `image`, `brief`, `content`, `subcategory_id`, `author`, `date`, `status`) VALUES
(1, 'Hướng dẫn làm bánh su kem tại nhà thật ngon', 'cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh', 'cakeweet.png', 'Những chiếc bánh su nhân kem tươi truyền thống đã quá đơn điệu, thêm một chút hương vị độc đáo của sầu riêng vào sẽ mang đến một hương vị hoàn toàn mới cho những chiếc bánh đấy! Cùng Scake shop học cách làm bánh su kem nhân sầu riêng ngon tuyệt này nhé!\r\n', 'Bước 5:\r\n– Đặt nồi hỗn hợp bơ bột ra ngoài cho nguội bớt, đánh tan 3 quả trứng rồi đổ từ từ phần trứng này vào hỗn hợp bột, trộn thật đều cho đến khi phần trứng quyện đều với bột là được.\r\nBước 6:\r\n– Cho hỗn hợp bột ở bước 5 vào túi bắt kem rồi bắt thành những hình xoắn ốc nhỏ lên khay nướng đã lớn sẵn giấy nến.\r\nBước 7:\r\n– Làm nóng lò ở nhiệt độ 200 độ C trước khi nướng khoảng 10 – 15 phút, sau đó cho bánh vào nướng từ 20 đến 30 phút, đến khi vỏ bánh chuyển màu vàng nâu là bánh chín.\r\nBước 8:\r\n– Lấy một cái âu sạch, đánh bông whipping cream lên, sau đó cho phần thịt sầu riêng vào đánh đều cùng.\r\nBước 9:\r\n– Cắt mở vỏ bánh su, cho nhân kem sầu riêng vào, có thể rắc chút đường bột lên mặt bánh để trang trí nữa là hoàn thành!\r\nChúc các bạn thành công với cách làm bánh su kem nhân sầu riêng ngon tuyệt này nhé!', 4, 15, '2017-03-24', 1),
(2, 'Cách làm bánh mì kẹp độc đáo', 'bi-quyet-la-cupcake-vung-den-thom-mat', '7298_cupcake.png', 'Mì ramen thơm lừng được kẹp trong bánh mì sẽ là một món mới lạ miệng mà ngon tuyệt khiến bạn không thể nào bỏ qua đâu đấy! Cùng Scakeshop học cách làm bánh mì kẹp mì độc đáo này nhé!', '<p>Dụng cụ l&agrave;m b&aacute;nh m&igrave; kẹp m&igrave; &ndash; Dao. &ndash; T&ocirc;. &ndash; Chảo. &ndash; Đũa. C&aacute;ch l&agrave;m b&aacute;nh m&igrave; kẹp m&igrave; độc đ&aacute;o Bước 1: &ndash; Th&aacute;i thịt heo th&agrave;nh từng miếng nhỏ. Cắt nhỏ h&agrave;nh l&aacute; v&agrave; ớt đỏ. lam banh mi kep mi doc dao 1 Bước 2: &ndash; Ướp thịt heo với ti&ecirc;u xay v&agrave; x&igrave; dầu. Bước 3: &ndash; Đặt một c&aacute;i chảo l&ecirc;n bếp, cho ch&uacute;t dầu ăn v&agrave;o, th&ecirc;m ớt đỏ v&agrave; thịt heo v&agrave;o x&agrave;o ch&iacute;n rồi tắt bếp. Bước 4: &ndash; Lấy một c&aacute;i chảo kh&aacute;c, cho m&igrave; ramen v&agrave;o chảo, n&ecirc;m x&igrave; dầu, rượu, muối v&agrave;o c&ugrave;ng cho vừa ăn rồi đảo đều. cuối c&ugrave;ng th&igrave; cho phần thịt heo đ&atilde; x&agrave;o ch&iacute;n v&agrave; h&agrave;nh l&aacute; v&agrave;o trộn đều c&ugrave;ng. Bước 5: &ndash; Xẻ đ&ocirc;i b&aacute;nh m&igrave; rồi cho m&igrave; vừa x&agrave;o v&agrave;o l&agrave;m nh&acirc;n l&agrave; ho&agrave;n th&agrave;nh! Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng với c&aacute;ch l&agrave;m b&aacute;nh m&igrave; kẹp m&igrave; độc đ&aacute;o n&agrave;y nh&eacute;!</p>\r\n', 4, 15, '2017-03-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `phone`, `created_at`) VALUES
(34, '', '', '', '', '2017-04-18 22:15:26'),
(35, 'Khánh', 'nguyenkhanh97nd@gmail.com', 'Nam Dinh', '841649616425', '2017-04-23 08:16:13'),
(36, 'Toan', 'nguyenkhanh97nd@gmail.com', 'Nam Dinh', '841649616425', '2017-04-23 08:16:33'),
(37, 'Toan Blog Khanh', 'nguyenkhanh@gmail.com', 'Nam Dinh, Nam Dinh', '1649616425', '2017-05-03 15:11:28'),
(38, 'Toan Blog Khanh', 'nguyenkhanh@gmail.com', 'Nam Dinh, Nam Dinh', '1649616425', '2017-05-04 17:51:03'),
(39, 'Toan Blog Khanh', 'nguyenkhanh@gmail.com', 'Nam Dinh, Nam Dinh', '1649616425', '2017-05-04 17:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `number_product` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `number_product`, `status`) VALUES
(31, 34, 10, 1, 0),
(32, 35, 10, 1, 0),
(33, 35, 7, 1, 0),
(34, 36, 5, 1, 0),
(35, 37, 10, 1, 0),
(36, 38, 9, 1, 1),
(37, 39, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `subcategory_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brief` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `subcategory_id`, `name`, `slug`, `brief`, `content`, `price`, `image`, `status`) VALUES
(1, 1, 'Bánh kem bạc', 'banh-kem-bac', 'Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn rất ngon! Quà sinh nhật cho gia đình – ngoài birthday cake – còn có hoa sinh nhật rất phổ biến.', 'Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn rất ngon!\r\nQuà sinh nhật cho gia đình – ngoài birthday cake – còn có hoa sinh nhật rất phổ biến. Bạn nghĩ sao nếu kết hợp 2 món quà tặng sinh nhật đó lại nhỉ? Chắc chắn là vừa tiết kiệm, món quà sinh nhật lại độc đáo không thể chê rồi!\r\nHappy birthday cake cổ điển – chocolate cake phủ hoa và trang trí đơn giản với tên người nhận – món quà sinh nhật cho anh trai\r\n ', 30000, 'banhkembac.png', 1),
(2, 2, 'Bánh ngọt vị dâu', 'banh-ngot-vi-dau', 'Bánh ngọt vị dâu', 'Khách hàng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Sweet Cake (cụ thể hình ảnh và tên từng loại xem chi tiết), 1 set bao gồm 8 chiếc bánh xinh xắn (khách hàng chọn tối thiểu là 4 chiếc/ 1 mẫu - 1 set tối đa được chọn 2 mẫu bánh). Toàn bộ nguyên liệu dùng trong làm bánh của cửa hàng đều nhập nhập từ thương hiệu uy tín tại Mỹ, Eu: Betty crocker, Wilton, Anchor và Dolphin. Khách hàng có thể lựa chọn 1 trong 2 vị Vani và Chocolate cho mỗi mẫu bánh của cửa hàng.', 40000, 'banhngotvidau.png', 1),
(3, 3, 'Bánh gato nhân kem', 'banh-gato-nhan-kem', 'Khách hàng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Sweet Cake (cụ thể hình ảnh và tên từng loại xem chi tiết), 1 set bao gồm 8 chiếc bánh xinh xắn (khách hàng chọn tối thiểu là 4 chiếc/ 1 mẫu - 1 set tối đa được chọn 2 mẫu bánh). Toàn bộ nguyên liệu dùng trong làm bánh của cửa hàng đều nhập...', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé! Đã nhiều lần thưởng thức những chiếc bánh cupcake ngon miệng, dễ thương, liệu bạn đã bao giờ tự hỏi nguồn gốc cupcake là ở đâu? Tên gọi bánh cupcake là gì?', 30000, 'banhgatonhankem.png', 1),
(4, 1, 'Bánh kem vani', 'banh-kem-vani', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất...', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé! Đã nhiều lần thưởng thức những chiếc bánh cupcake ngon miệng, dễ thương, liệu bạn đã bao giờ tự hỏi nguồn gốc cupcake là ở đâu? Tên gọi bánh cupcake là gì?', 350000, 'banhkemvani.jpg', 1),
(5, 1, 'Bánh kem dâu', 'banh-kem-dau', 'Điểm qua một số mẫu bánh gato sinh nhật dễ thương làm quà tặng độc đáo cho bé cùng GATO nào. Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn...', 'Điểm qua một số mẫu bánh gato sinh nhật dễ thương làm quà tặng độc đáo cho bé cùng GATO nào. Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn rất ngon! Quà sinh nhật cho gia đình – ngoài birthday cake – còn có hoa sinh nhật rất phổ biến. Bạn nghĩ sao nếu kết hợp 2 món quà tặng sinh nhật đó lại nhỉ? Chắc chắn là vừa tiết kiệm, món quà sinh nhật lại độc đáo không thể chê rồi! Happy birthday cake cổ điển – chocolate cake phủ hoa và trang trí đơn giản với tên người nhận – món quà sinh nhật cho anh trai', 35000, 'banhkemdau.png', 1),
(6, 1, 'Bánh Torrija', 'banh-torrija', 'Điểm qua một số mẫu bánh gato sinh nhật dễ thương làm quà tặng độc đáo cho bé cùng GATO nào. Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn...', 'Điểm qua một số mẫu bánh gato sinh nhật dễ thương làm quà tặng độc đáo cho bé cùng GATO nào. Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn rất ngon! Quà sinh nhật cho gia đình – ngoài birthday cake – còn có hoa sinh nhật rất phổ biến. Bạn nghĩ sao nếu kết hợp 2 món quà tặng sinh nhật đó lại nhỉ? Chắc chắn là vừa tiết kiệm, món quà sinh nhật lại độc đáo không thể chê rồi! Happy birthday cake cổ điển – chocolate cake phủ hoa và trang trí đơn giản với tên người nhận – món quà sinh nhật cho anh trai', 50000, 'banhtorrija.png', 1),
(7, 1, 'Cake weet', 'cake-weet', 'Hoa sinh nhật 2 trong một với cupcake – một chiếc happy birthday cake tuyệt vời để tặng quà sinh nhật cho bạn gái nhỉ?Một chút sáng tạo, cộng với sự giúp đỡ của… bánh quế và kem phủ, bạn đã có ngay cupcake giày cao gót làm quà sinh nhật bạn gái. Con gái không thể chê một món quà sinh nhật tâm lý và tuyệt vời thế...', 'Hoa sinh nhật 2 trong một với cupcake – một chiếc happy birthday cake tuyệt vời để tặng quà sinh nhật cho bạn gái nhỉ?Một chút sáng tạo, cộng với sự giúp đỡ của… bánh quế và kem phủ, bạn đã có ngay cupcake giày cao gót làm quà sinh nhật bạn gái. Con gái không thể chê một món quà sinh nhật tâm lý và tuyệt vời thế này từ bạn trai của mình đâu.Hôm nay dọn tủ bếp thấy có cơ man nào là hạt khô: nho khô, cranberry khô, hạt óc chó, hạt điều, hạt dẻ cười, đậu phộng,… Ôi sao mà nhiều thế! Lần trước có khách đến mang ra nhấm nháp với bia mà sao vẫn chưa hết nhỉ!? Nhìn hạn sử dụng thì chỉ còn hai tuần nữa, thế là phải chưng dụng làm bánh ngọt để uống trà hoặc là cho vào túi để lúc đói nhấm nháp. Kiểu này lại sắp có cái eo bánh mỳ rồi đây, bởi làm bánh  ngọt thì không thể thiếu trứng và bơ ơ ơ ơ……', 350000, 'cakeweet.png', 1),
(8, 1, 'Cupcake bạc hà', 'cupcake-bac-ha', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất...', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé!', 50000, 'cupcakebacha.png', 1),
(9, 1, 'Cupcake vani', 'cupcake-vani', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất...\n', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé! Đã nhiều lần thưởng thức những chiếc bánh cupcake ngon miệng, dễ thương, liệu bạn đã bao giờ tự hỏi nguồn gốc cupcake là ở đâu? Tên gọi bánh cupcake là gì?', 50000, 'cupcakevani.jpg', 1),
(10, 1, 'Mứt kem', 'mut-kem', 'Trứng được ăn hàng ngày. Nó có mặt khắp nơi, từ các nhà hàng sang trọng cho đến những hàng ăn bình dân hay tại nhà. Trứng đúc khoai tây, ăn nguội hay để lạnh là món phổ biến. Khách hàng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Afamily Cake (cụ thể hình ảnh và tên từng loại xem chi tiết), 1 set bao...', '<p>Trứng được ăn h&agrave;ng ng&agrave;y. N&oacute; c&oacute; mặt khắp nơi, từ c&aacute;c nh&agrave; h&agrave;ng sang trọng cho đến những h&agrave;ng ăn b&igrave;nh d&acirc;n hay tại nh&agrave;. Trứng đ&uacute;c khoai t&acirc;y, ăn nguội hay để lạnh l&agrave; m&oacute;n phổ biến. Kh&aacute;ch h&agrave;ng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Afamily Cake (cụ thể h&igrave;nh ảnh v&agrave; t&ecirc;n từng loại xem chi tiết), 1 set bao gồm 8 chiếc b&aacute;nh xinh xắn (kh&aacute;ch h&agrave;ng chọn tối thiểu l&agrave; 4 chiếc/ 1 mẫu - 1 set tối đa được chọn 2 mẫu b&aacute;nh).</p>\r\n', 30000, 'mutkem.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `id_product`, `id_user`, `content`, `created_at`, `status`) VALUES
(29, 10, 15, 'dep lam', '2017-05-06', 1),
(30, 10, 15, 'lam tot lam', '2017-05-06', 1),
(31, 10, 15, 'a', '2019-04-30', 1),
(32, 10, 15, '<script>alert(\"xss\")</script>', '2019-04-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `description`, `status`) VALUES
(1, 1, 'Bánh kem', 'banh-kem', 'Chuyên mục bánh kem', 1),
(2, 1, 'Bánh ngọt', 'banh-ngot', 'Chuyên mục bánh ngọt', 1),
(3, 1, 'Bánh gato', 'banh-gato', 'Chuyên mục bánh gato', 1),
(4, 2, 'Bánh mới', 'banh-moi', 'Tin tức bánh mới', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `avatar`, `email`, `address`, `phone`, `level`, `status`) VALUES
(15, 'root', 'c4ca4238a0b923820dcc509a6f75849b', 'Toan1', 'root.png', 'nguyenkhanh97nd@gmail.com', 'Nam Dinh111', 'aa8416496164251111', 1, 1),
(16, 'nguyenkhanh97nd', 'c4ca4238a0b923820dcc509a6f75849b', 'Toan', NULL, 'nguyenkhanh97nd@gmail.com', 'Nam Dinh', '841649616425', 0, 1),
(32, 'blogtoan', '0419c6ae5b5f6341c79b7ef3a1c96bfc', 'Toan', NULL, 'nguyenkhanh@gmail.com', 'Nam Dinh', '841649616425', 0, 1),
(33, 'root22', 'c4ca4238a0b923820dcc509a6f75849b', 'Toan', NULL, '123@gmail.com', 'Nam Dinh', '841649616425', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `author_id` (`author`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
