-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2018 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `final_test_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `img`, `des`) VALUES
(87, 'Kết quả xổ số miền Bắc hôm nay 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ket-qua-xo-so-mien-nam-hom-nay-21122018-a256028.html\">                                                      Kết quả xổ số miền Bắc hôm nay 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x480x340/2018/12/21/nha_cai_w88_va_tro_choi_xo_so_lo_de_truc_tuyen.jpg', 'Kết quả xổ số miền Bắc hôm nay 21/12/2018. Cập nhật kết quả xổ số miền Bắc nhanh và chính xác nhất trên trang Đời...'),
(88, 'Kết quả xổ số Trà Vinh hôm nay 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ket-qua-xo-so-tra-vinh-hom-nay-21122018-a256041.html\">                                                      Kết quả xổ số Trà Vinh hôm nay 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/xo_so_mien_nam_2112_anh_1.jpg', 'Kết quả xổ số  Trà Vinh hôm nay 21/12/2018. Cập nhật kết quả xổ số  Trà Vinh nhanh và chính xác nhất trên trang Đời...'),
(89, 'Bị tai biến mạch máu não do huyết áp cao, anh Sơn đã làm gì để cải thiện?', '<a target=\"_blank\" rel=\"nofollow\" href=\"https://dotquynao.com/bai-viet/phuong-phap-dieu-tri/nam-mot-cho-vi-bi-liet-nua-nguoi-sau-tai-bien-anh-thanh-da-may-man-khoe-lai-nho-cach-nay.html?utm_source=DOISONGPHAPLUAT-Home1-PC&utm_medium=CPD&utm_campaign=NTP-DQ\">                                          ', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/16/111.png', ''),
(90, 'Bệnh tiểu đường (hay còn gọi là đái tháo đường) được xếp vào tốp những bệnh nguy hiểm nhất hiện nay', '<a target=\"_blank\" rel=\"nofollow\" href=\"http://benhtuoigia.com.vn/chien-thang-bien-chung-tieu-duong-nho-bonidiabet?utm_source=DSPL_BoniDiabetPC\">                                                          Bệnh tiểu đường (hay còn gọi là đái tháo đường) được xếp vào tốp những bệnh nguy hiểm nhất hiện n', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/09/5.jpg', ''),
(91, 'Kết quả xổ số Bình Dương hôm nay 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ket-qua-xo-so-binh-duong-hom-nay-21122018-a256042.html\">                                                      Kết quả xổ số Bình Dương hôm nay 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/xo_so_mien_nam_2112_anh_2.jpg', 'Kết quả xổ số Bình Dương hôm nay 21/12/2018. Cập nhật kết quả xổ số Bình Dương nhanh và chính xác nhất trên trang Đời...'),
(92, 'Kết quả xổ số Vĩnh Long hôm nay 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ket-qua-xo-so-vinh-long-hom-nay-21122018-a256046.html\">                                                      Kết quả xổ số Vĩnh Long hôm nay 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/xo_so_mien_nam_2112_anh_3.jpg', 'Kết quả xổ số Vĩnh Long hôm nay 21/12/2018. Cập nhật kết quả xổ số Vĩnh Long nhanh và chính xác nhất trên trang Đời...'),
(93, 'Kết quả xổ số miền Nam hôm nay 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ket-qua-xo-so-mien-nam-hom-nay-21122018-a256047.html\">                                                      Kết quả xổ số miền Nam hôm nay 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/xo_so_mien_nam_2112_anh_3.jpg', 'Kết quả xổ số miền Nam hôm nay 21/12/2018. Cập nhật kết quả xổ số miền Nam nhanh và chính xác nhất trên trang Đời...'),
(94, 'HLV Park Hang-seo được bầu chọn là Nhân vật tiêu biểu châu Á 2018', '<a href=\"http://www.doisongphapluat.com/tin-tuc/hlv-park-hang-seo-duoc-bau-chon-la-nhan-vat-tieu-bieu-chau-a-2018-a256036.html\">                                                      HLV Park Hang-seo được bầu chọn là Nhân vật tiêu biểu châu Á 2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/hlv_park_hang_seo_nhan_vat_chau_a_nam_2018_1.jpg', 'HLV Park Hang-seo vừa nhận danh hiệu \"Nhân vật tiêu biểu của châu Á năm 2018\" do Hiệp hội Nhà báo châu Á (AJA) bình...'),
(95, 'Giá xăng dầu đồng loạt giảm lần thứ 5 liên tiếp', '<a href=\"http://www.doisongphapluat.com/tin-tuc/gia-xang-dau-dong-loat-giam-lan-thu-5-lien-tiep-a256023.html\">                                                      Giá xăng dầu đồng loạt giảm lần thứ 5 liên tiếp</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/giam_gia_xang_dau.jpg', 'Liên Bộ Tài chính - Công Thương vừa có thông báo về việc điều chỉnh giá xăng dầu từ 15h00 chiều nay (21/12).'),
(96, 'Lý do khó ngờ khiến hàng loạt nhân viên thú y nghỉ việc tại TP.HCM', '<a href=\"http://www.doisongphapluat.com/tin-tuc/ly-do-kho-ngo-khien-hang-loat-nhan-vien-thu-y-nghi-viec-tai-tphcm-a256017.html\">                                                      Lý do khó ngờ khiến hàng loạt nhân viên thú y nghỉ việc tại TP.HCM</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/tp_hcm_hang_loat_nhan_vien_thu_y_nghi_viec_vi_khong_duoc_tra_luong_dsp_2.jpg', 'Việc gần một năm không được trả lương đã khiến ít nhất 10 nhân viên thú y địa bàn thuộc chi cục Chăn nuôi và Thú y...'),
(97, 'Tin tức thời sự thế giới 24h mới nhất, nóng nhất hôm nay ngày 21/12/2018', '<a href=\"http://www.doisongphapluat.com/tin-the-gioi/tin-tuc-thoi-su-the-gioi-24h-moi-nhat-nong-nhat-hom-nay-ngay-21-12-2018-a256019.html\">                                                      Tin tức thời sự thế giới 24h mới nhất, nóng nhất hôm nay ngày 21/12/2018</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/diem_tin_the_gioi_hom_nay_5.jpg', 'Tin tức thời sự thế giới 24h mới nhất, nóng nhất ngày 21/12/2018: Lực lượng thân Mỹ thả hàng nghìn tay súng IS, Bộ...'),
(98, 'Sốc với đường dây bán bào thai từ Nghệ An sang Trung Quốc', '<a href=\"http://www.doisongphapluat.com/tin-tuc/soc-voi-duong-day-ban-bao-thai-tu-nghe-an-sang-trung-quoc-a256002.html\">                                                      Sốc với đường dây bán bào thai từ Nghệ An sang Trung Quốc</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/soc_voi_duong_day_ban_bao_thai_tu_nghe_an_sang_trung_quoc_2.jpg', 'Nhiều phụ nữ mang thai lần lượt xuất cảnh sang Trung Quốc nhưng khi trở về thì cái thai trong bụng không còn...'),
(99, 'Ôm cua quá rộng, \"nữ ninja\" nằm gọn dưới gầm ô tô tải', '<a href=\"http://www.doisongphapluat.com/tin-tuc/om-cua-qua-rong-nu-ninja-nam-gon-duoi-gam-o-to-tai-a256012.html\">                                                      Ôm cua quá rộng, \"nữ ninja\" nằm gọn dưới gầm ô tô tải <img src=\"http://www.doisongphapluat.com/images/video.gif\"></a>', 'http://media.doisongphapluat.com/2018/12/21/2phxvf.gif', 'Mới đây, trên mạng xã hội xuất hiện đoạn clip ghi lại cảnh đóng cua nguy hiểm của \"nữ ninja\" cùng cái kết không thể...'),
(100, 'TP. HCM cấm lưu thông xe vào trung tâm quận 3 trong hai ngày 21/12 và 23/12', '<a href=\"http://www.doisongphapluat.com/tin-tuc/tp-hcm-cam-luu-thong-xe-vao-trung-tam-quan-3-trong-hai-ngay-2112-va-2312-a256004.html\">                                                      TP. HCM cấm lưu thông xe vào trung tâm quận 3 trong hai ngày 21/12 và 23/12</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/cam_xe.jpg', 'Từ tối 21/12 và 23/12, TP. Hồ Chí Minh cấm tất cả các loại xe lưu thông hướng về trụ sở Quận ủy - HĐND - UBND quận 3.'),
(101, 'Món ngon mỗi ngày: Canh sườn nấu dọc mùng cho bữa cơm gia đình thêm ngon', '<a href=\"http://www.doisongphapluat.com/tin-tuc/mon-ngon-moi-ngay-canh-suon-nau-doc-mung-cho-bua-com-gia-dinh-them-ngon-a255996.html\">                                                      Món ngon mỗi ngày: Canh sườn nấu dọc mùng cho bữa cơm gia đình thêm ngon</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/mat_diu_canh_suon_nau_doc_mung_2.jpg', 'Canh sườn nấu dọc mùng có vị chua chua ngọt ngọt hòa quyện với nhau, cùng màu sắc tươi mát sẽ giúp cả nhà xuýt xoa...'),
(102, 'Hạ viện Mỹ phê chuẩn tài trợ 5,7 tỉ USD xây tường biên giới với Mexico', '<a href=\"http://www.doisongphapluat.com/tin-the-gioi/ha-vien-my-phe-chuan-tai-tro-57-ti-usd-xay-tuong-bien-gioi-voi-mexico-a256003.html\">                                                      Hạ viện Mỹ phê chuẩn tài trợ 5,7 tỉ USD xây tường biên giới với Mexico </a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/tai_xuong_1_1824_1545362178.jpg', 'Hạ viện Mỹ tối 20/12 đã quyết định bổ sung 5 tỷ USD vào dự luật chi tiêu của chính phủ nhằm hỗ trợ cho việc xây bức...'),
(103, 'Video: Công Phượng nổi nhất buổi tập đầu tiên cho Asian Cup vì kiểu tóc \"súp lơ\"', '<a href=\"http://www.doisongphapluat.com/tin-tuc/video-cong-phuong-noi-nhat-buoi-tap-dau-tien-cho-asian-cup-vi-kieu-toc-dac-biet-a256009.html\">                                                      Video: Công Phượng nổi nhất buổi tập đầu tiên cho Asian Cup vì kiểu tóc \"súp lơ\" <img src=\"http://www.do', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/cong_phuong_noi_bat_voi_kieu_toc_moi_2.jpg', 'Công Phượng, Văn Toàn đều đã thay đổi những kiểu tóc nổi bật trước khi ĐT Việt Nam hội quân chuẩn bị cho Asian Cup 2019.'),
(104, 'Bộ trưởng Quốc phòng Mỹ vẫn chưa ký lệnh rút quân khỏi Syria?', '<a href=\"http://www.doisongphapluat.com/tin-the-gioi/bo-truong-quoc-phong-my-van-chua-ky-lenh-rut-quan-khoi-syria-a256008.html\">                                                      Bộ trưởng Quốc phòng Mỹ vẫn chưa ký lệnh rút quân khỏi Syria?</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/bo_truong_quoc_phong_my_chua_ky_lenh_rut_quan_dspl.jpg', 'Bất đồng quan điểm với Tổng thống Donald Trump, Bộ trưởng Quốc phòng Jim Mattis vẫn chưa ký quyết định rút lính Mỹ...'),
(105, 'Qualcomm tiếp tục “dằn mặt Táo khuyết\" khi đạt được lệnh cấm bán iPhone tại Đức', '<a href=\"http://www.doisongphapluat.com/tin-tuc/qualcomm-tiep-tuc-dan-mat-tao-khuyet-khi-dat-duoc-lenh-cam-ban-iphone-tai-duc-a256007.html\">                                                      Qualcomm tiếp tục “dằn mặt Táo khuyết\" khi đạt được lệnh cấm bán iPhone tại Đức</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/1478c50c_8ffa_11e8_ad1d_4615aa6bc452_1280x720_190045.jpg', 'Sau Trung Quốc, các cửa hàng Apple Store tại Đức đã phải dừng bán những chiếc iPhone 7 và iPhone 8 vì lệnh cấm mới.'),
(106, 'Đồng minh của Mỹ ở Syria xem xét thả gần 3.200 kẻ khủng bố IS', '<a href=\"http://www.doisongphapluat.com/tin-the-gioi/dong-minh-cua-my-o-syria-xem-xet-tha-gan-3200-ke-khung-bo-is-a255999.html\">                                                      Đồng minh của Mỹ ở Syria xem xét thả gần 3.200 kẻ khủng bố IS</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/dong_minh_my_syria_xem_xet_tha_hon_3k_is_dspl.jpg', 'Đồng minh người Kurd của Mỹ ở Syria đang thảo luận về việc thả 3.200 tù nhân của tổ chức khủng bố Nhà nước Hồi giáo...'),
(107, 'Vừa nghỉ việc một tuần, cựu thư ký tòa án đã xông đến đánh luật sư ngay trước phòng xét xử', '<a href=\"http://www.doisongphapluat.com/tin-tuc/vua-nghi-viec-mot-tuan-cuu-thu-ky-toa-an-da-xong-den-danh-luat-su-ngay-truoc-phong-xet-xu-a256001.html\">                                                      Vừa nghỉ việc một tuần, cựu thư ký tòa án đã xông đến đánh luật sư ngay trước phòng xét xử</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/luat_su_bi_cuu_thu_ky_toa_an_danh_tai_toa_dspl_1.jpg', 'Trước giờ xét xử, một nam luật sư bất ngờ bị cựu thư ký tòa án xông đến đấm thẳng vào mặt trước sự chứng kiến của...'),
(108, 'Hé lộ 4 ngôi sao đứng sau thao túng màn kịch ép MU sa thải Mourinho', '<a href=\"http://www.doisongphapluat.com/tin-tuc/he-lo-4-ngoi-sao-dung-sau-thao-tung-man-kich-ep-mu-sa-thai-mourinho-a255998.html\">                                                      Hé lộ 4 ngôi sao đứng sau thao túng màn kịch ép MU sa thải Mourinho</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/4_cau_thu_ep_mu_sa_thai_mourinho_1.jpg', 'Theo tờ Daily Star hé lộ, 4 ngôi sao đã đến gặp Phó Chủ tịch Ed Woodward và gây sức ép buộc MU sa thải Mourinho.'),
(109, 'Video: 2 đứa trẻ trộm ôtô, lái xe bỏ chạy hàng chục km rồi gây tai nạn', '<a href=\"http://www.doisongphapluat.com/tin-tuc/video-2-dua-tre-trom-oto-lai-xe-bo-chay-hang-chuc-km-roi-gay-tai-nan-a256000.html\">                                                      Video: 2 đứa trẻ trộm ôtô, lái xe bỏ chạy hàng chục km rồi gây tai nạn <img src=\"http://www.doisongphapluat.com/ima', 'http://media.doisongphapluat.com/2018/12/21/2phmbz_154536423776652852229_crop_15453642459941019244476.gif', 'Sau khi đột nhập vào nhà người dân, bộ đôi thấy ô tô tải cắm sẵn chìa khóa nên leo lên lái đi. Bỏ chạy được 15 km thì...'),
(110, 'Tình tiết rùng mình vụ tra tấn con nợ đến chết, vứt xác ra quốc lộ ở Quảng Ninh', '<a href=\"http://www.doisongphapluat.com/tin-tuc/tinh-tiet-rung-minh-vu-tra-tan-con-no-den-chet-vut-xac-ra-quoc-lo-o-quang-ninh-a255942.html\">                                                      Tình tiết rùng mình vụ tra tấn con nợ đến chết, vứt xác ra quốc lộ ở Quảng Ninh</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/Tra_tan_con_no_den_chet_1.jpg', 'Sau khi con nợ tử vong, Vinh cùng đồng bọn đã giấu xác nạn nhân, chờ đến nửa đêm thì mang xác ra quốc lộ 18A cũ (tỉnh...'),
(111, 'Tiếp tục xây dựng Quân đội hùng mạnh, bảo vệ vững chắc Tổ quốc Việt Nam XHCN', '<a href=\"http://www.doisongphapluat.com/tin-tuc/tiep-tuc-xay-dung-quan-doi-hung-manh-bao-ve-vung-chac-to-quoc-viet-nam-xhcn-a255997.html\">                                                      Tiếp tục xây dựng Quân đội hùng mạnh, bảo vệ vững chắc Tổ quốc Việt Nam XHCN</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/qdnd_1513682155814.jpg', 'Nhìn lại cả bề dầy lịch sử hào hùng 74 năm qua, dưới sự lãnh đạo của Đảng, sự chỉ dạy của Chủ tịch Hồ Chí Minh vĩ...'),
(112, 'Video: Người đàn ông bắt con rắn hổ mang giận dữ bằng đôi tay trần', '<a href=\"http://www.doisongphapluat.com/tin-tuc/video-nguoi-dan-ong-bat-con-ran-ho-mang-gian-du-bang-doi-tay-tran-a255971.html\">                                                      Video: Người đàn ông bắt con rắn hổ mang giận dữ bằng đôi tay trần <img src=\"http://www.doisongphapluat.com/images/vid', 'http://media.doisongphapluat.com/2018/12/21/2pho59.gif', 'Gowri Shankar – một chuyên gia bắt rắn nổi tiếng thế giới đã giúp người dân tại ngôi làng ở Ấn Độ bắt con rắn hổ mang...'),
(113, 'Vụ sát hại người bán cá giữa đồng: Phát hiện điều bất ngờ tại nhà nhân chứng đi cùng', '<a href=\"http://www.doisongphapluat.com/tin-tuc/vu-sat-hai-nguoi-ban-ca-giua-dong-phat-hien-dieu-bat-ngo-tai-nha-nhan-chung-di-cung-a255993.html\">                                                      Vụ sát hại người bán cá giữa đồng: Phát hiện điều bất ngờ tại nhà nhân chứng đi cùng</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/vu_sat_hai_nguoi_ban_ca_giua_dong_phat_hien_dieu_nat_ngo_o_nha_nguoi_di_cung_2_dspl.jpg', 'Liên quan đến vụ người phụ nữ bán cá bị sát hại giữa đồng. quá trình thu thập tài liệu, chứng cứ, công an đã niêm...'),
(114, 'Thủy Tiên \"tá hỏa\" nghe mẹ chồng khóc nức nở hỏi chuyện ly hôn với Công Vinh', '<a href=\"http://www.doisongphapluat.com/tin-tuc/thuy-tien-ta-hoa-nghe-me-chong-khoc-nuc-no-hoi-chuyen-ly-hon-voi-cong-vinh-a255994.html\">                                                      Thủy Tiên \"tá hỏa\" nghe mẹ chồng khóc nức nở hỏi chuyện ly hôn với Công Vinh</a>', 'http://media.doisongphapluat.com/thumb_x190x125/2018/12/21/tin_don_cong_vinh_thuy_tien_ly_hon_1.jpg', 'Nữ ca sĩ Thủy Tiên vừa phải lên tiếng đính chính trên trang cá nhân về tin đồn ly hôn với Công Vinh.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
