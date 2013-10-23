-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Oktober 2013 jam 17:45
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cgi_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel_img`
--

CREATE TABLE IF NOT EXISTS `carousel_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `alt_image` varchar(50) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `carousel_img`
--

INSERT INTO `carousel_img` (`id`, `img_src`, `link`, `alt_image`, `order`, `status`) VALUES
(1, 'antennae.jpg', 'antennae', 'antennae', 1, 1),
(2, 'carina.jpg', 'carina', 'carina', 2, 1),
(3, 'echo.jpg', 'echo', 'echo', 3, 1),
(4, 'ngc5866.jpg', 'ngc5866', 'ngc5866', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `uploaded_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `catalog`
--

INSERT INTO `catalog` (`id`, `file_name`, `status`, `lang`, `uploaded_time`) VALUES
(1, 'request.pdf', 1, NULL, '2013-10-11 15:37:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comp_data`
--

CREATE TABLE IF NOT EXISTS `comp_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `bb` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo_src` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `comp_data`
--

INSERT INTO `comp_data` (`id`, `phone`, `bb`, `email`, `logo_src`, `status`) VALUES
(1, '021-xxxx', 'xxxxxx', 'xxxxx@xxxxxx.xxx', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `start_time` datetime NOT NULL,
  `exp_time` datetime NOT NULL,
  `img_src` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `link_footer`
--

CREATE TABLE IF NOT EXISTS `link_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `link_footer`
--

INSERT INTO `link_footer` (`id`, `text`, `link`, `order`, `status`, `lang`) VALUES
(1, 'Home', '', 1, 1, 'en'),
(2, 'Contact Us', 'pages/contact', 2, 1, 'en'),
(3, 'Retail Location', 'pages/retail_location', 3, 1, 'en'),
(4, 'About Us', 'pages/about', 4, 1, 'en'),
(5, 'Careers', 'pages/career', 5, 1, 'en'),
(6, 'Privacy & Security Policy', 'pages/privacy', 6, 1, 'en');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(30) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `media_name`, `lang`, `status`) VALUES
(1, 'Internet', 'en', 1),
(2, 'Newspaper', 'en', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `store_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `pin_bb` varchar(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `destination_address` varchar(200) DEFAULT NULL,
  `nation_name` varchar(50) DEFAULT NULL,
  `region_name` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `omzet` double DEFAULT NULL,
  `total_employee` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `member`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `member_interests`
--

CREATE TABLE IF NOT EXISTS `member_interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `member_interests`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `member_items`
--

CREATE TABLE IF NOT EXISTS `member_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `member_items`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_backend`
--

CREATE TABLE IF NOT EXISTS `menu_backend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `menu_backend`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_footer`
--

CREATE TABLE IF NOT EXISTS `menu_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `menu_footer`
--

INSERT INTO `menu_footer` (`id`, `text`, `link`, `order`, `status`, `lang`, `parent_id`) VALUES
(1, 'Bedsheet', '#', 1, 1, 'en', 0),
(2, 'Blanket', '#', 2, 1, 'en', 0),
(3, 'Bedcover Sheet', '#', 3, 1, 'en', 0),
(4, 'Pillows', '#', 1, 1, 'en', 1),
(5, 'Bedspreads', '#', 2, 1, 'en', 1),
(6, 'Laundry & Home Care', '#', 1, 1, 'en', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_header`
--

CREATE TABLE IF NOT EXISTS `menu_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `menu_header`
--

INSERT INTO `menu_header` (`id`, `text`, `link`, `order`, `status`, `lang`, `parent_id`) VALUES
(1, 'Home', '', 1, 1, 'en', 0),
(2, 'Product', 'pages/product', 2, 1, 'en', 0),
(3, 'About Us', 'pages/about', 3, 1, 'en', 0),
(4, 'Contact Us', 'pages/contact', 4, 1, 'en', 0),
(5, 'Retail Location', 'pages/retail_location', 5, 1, 'en', 0),
(6, 'Bedsheet', '#', 1, 1, 'en', 2),
(7, 'Blanket', '#', 2, 1, 'en', 2),
(10, 'Bedcover Sheet', '#', 3, 1, 'en', 2),
(11, 'Pillows', '#', 1, 1, 'en', 6),
(12, 'Bedspreads', '#', 2, 1, 'en', 6),
(13, 'Laundry & Home Care', '#', 1, 1, 'en', 10),
(14, 'News', 'pages/news', 6, 1, 'en', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_user`
--

CREATE TABLE IF NOT EXISTS `menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `menu_user`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merk_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `merk`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `content` text NOT NULL,
  `sent_time` datetime NOT NULL,
  `answered_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `message`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `nation`
--

CREATE TABLE IF NOT EXISTS `nation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nation_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `nation`
--

INSERT INTO `nation` (`id`, `nation_name`, `status`) VALUES
(1, 'Indonesia', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `lang` varchar(5) NOT NULL,
  `created_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `news`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `page_contents`
--

CREATE TABLE IF NOT EXISTS `page_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `content` text,
  `page` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `updated_time` datetime NOT NULL,
  `img_src` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `page_contents`
--

INSERT INTO `page_contents` (`id`, `status`, `lang`, `content`, `page`, `title`, `updated_time`, `img_src`) VALUES
(1, 1, 'en', 'Adairs is recognised as Australia''s leading specialist retailer of manchester and Homewares. With over 100 stores nationally, the business comprises of some of this country''s best know retail brands, such as Adairs (including Adairs Homemaker and Adairs Factory Outlets), Adairs Kids and Urban Home Republic.<br><br>\r\n \r\nWe offer the largest and most comprehensive range of bed linen, bedding products, towels, cushions, throws, homewares, wall art and furniture.<br><br>\r\n\r\nOur stores are run by the best retail team in the country, offering a unique level of service and product knowledge that helps set Adairs apart from any other retail chain offering home decor products.\r\nWe have a long and proud history, commencing trading in 1918 on Chapel Street, Prahran, Victoria.  Adairs later became established as a mini department store in Camberwell, which until 1980, stocked manchester, curtains, ladies wear and haberdashery.<br><br>\r\n\r\nIn 1981 the first incarnation of a modern Adairs boutique was opened in Doncaster Shoppingtown. The success of this format saw the opening of another 4 stores in 1984.  These stores were also in Victoria the Brandon Park, Chadstone, Frankston and Northland shopping centres.<br><br>\r\n\r\nSince then the group has grown to in excess of 100 stores nationally.<br><br>\r\n\r\nIn November of 2007, the MacLean family sold their majority stake in the business to BBRetail Capital Pty Ltd.<br><br>\r\n\r\nIn December 2010 Adairs was acquired by Catalyst Investment Managers in partnership with the company''s existing executive management team and BB Retail Capital (BBRC). Adairs is now known as the Adairs Retail Group (ARG).<br><br>\r\n\r\nToday we are proud to say that we employ the best people in stores, have the most experienced expert buyers, product developers and designers; ensuring that our offer is always on trend and on quality.\r\nOur belief at Adairs is it''s about the Customer Always and we operate our business with that sole focus.<br><br>\r\n\r\nOur Customer Promise is something all of the Adairs'' team is measured by.', 'about', 'About Us', '2013-10-16 09:46:57', 'cth-image-banner-content.jpg'),
(2, 1, 'en', '<b>Call us:</b><br>\r\nFor enquiries relating to our online store, call Australia wide on 1300 783 005 Monday to Friday 8:30am to 5pm (AEST).<br><br>\r\n\r\nFor non-Online and General Enquiries, please contact Adairs Customer Support Office on 03 8888 4500, Monday to Friday 9am to 5:30pm (AEST).<br><br>\r\n\r\n<b>Our Stores:</b><br>\r\nSearch for your nearest Adairs Store or browse stores in your state.\r\n> Store Locator\r\n> Browse stores in your state<br><br>\r\n\r\n<b>Written Enquiries</b><br>\r\nOnline Store enquiries: Carlene Pittman, 2 International Court, Scoresby VIC 3179<br><br>\r\n \r\n<b>General Enquiries and Correspondence</b><br>\r\nAdairs Retail Group - Customer Support Office\r\n2 International Court\r\nCaribbean Business Park\r\nScoresby VICTORIA 3179<br><br>\r\n\r\n<b>Privacy</b><br>\r\nAdairs respects your privacy and we collect any personal information to ensure the best customer service experience is provided to you. For more information, please read our Privacy Policy.', 'contact', 'Contact Us', '2013-10-16 09:53:09', 'cth-image-banner-content.jpg'),
(3, 1, 'en', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'privacy', 'Privacy & Security Policy', '2013-10-16 09:53:31', 'cth-image-banner-content.jpg'),
(4, 1, 'en', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere', 'career', 'Career', '2013-10-16 09:53:46', 'cth-image-banner-content.jpg'),
(5, 1, 'en', NULL, 'retail_location', 'Retail Location', '2013-10-23 16:25:48', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_frontend`
--

CREATE TABLE IF NOT EXISTS `post_frontend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `page` varchar(30) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `post_frontend`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `updated_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `product`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `lang`, `status`) VALUES
(1, 'Bedsheet', 'en', 1),
(2, 'Blanket', 'en', 1),
(3, 'Bedcover Sheet', 'en', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `lang` varchar(5) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `product_detail`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `questionaire`
--

CREATE TABLE IF NOT EXISTS `questionaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_media` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `questionaire`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `region_name`
--

CREATE TABLE IF NOT EXISTS `region_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `id_nation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `region_name`
--

INSERT INTO `region_name` (`id`, `region_name`, `status`, `id_nation`) VALUES
(1, 'Jakarta', 1, 1),
(2, 'Bekasi', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_admin_user`
--

CREATE TABLE IF NOT EXISTS `web_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `web_admin_user`
--

INSERT INTO `web_admin_user` (`id`, `status`, `username`, `password`) VALUES
(1, 1, 'cgiadmin', 'cendrawasihjkt2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
