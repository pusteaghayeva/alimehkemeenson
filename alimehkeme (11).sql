-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 06:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alimehkeme`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Ümumi məlumat', '<h3 class=\"second-title\" style=\"box-sizing: border-box; margin: 20px 0px 10px; font-weight: 500; line-height: 1.4; font-size: 1.66rem; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #333333; padding: 0px; text-align: justify;\"><span style=\"font-size: 12pt;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi apellyasiya instansiyası məhkəməsi kimi &ouml;z ərazi yurisdiksiyasına aid edilmiş birinci instansiya məhkəmələri tərəfindən baxılmış işlər &uuml;zrə məhkəmə aktlarından verilmiş apellyasiya şikayətləri və apellyasiya protestləri &uuml;zrə işlərə baxır. Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi m&uuml;lki kollegiyadan, inzibati kollegiyadan, kommersiya kollegiyasından və cinayət kollegiyadan ibarətdir.</span></h3>\r\n<h2 class=\"about-title-se\" style=\"box-sizing: border-box; margin: 25px 0px; font-weight: 500; line-height: 1.1; font-size: 1.9rem; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #333333; padding: 0px;\"><span style=\"font-size: 12pt;\">NAX&Ccedil;IVAN MR ALİ MƏHKƏMƏSİNİN TARİXİ</span></h2>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi &ouml;lkəmizin məhkəmə orqanları sistemində &ouml;z&uuml;nəməxsus yer tutur. Məhkəmələr və hakimlər haqqında Azərbaycan Respublikasının 1997-ci il 10 iyun tarixli Qanununda Nax&ccedil;ıvan MR Ali Məhkəməsi apellyasiya instansiyası məhkəməsi kimi təsbit edilmişdir. Lakin digər apellyasiya məhkəmələrindən fərqli olaraq, Nax&ccedil;ıvan MR Ali Məhkəməsi Məhkəmələr və hakimlər haqqında Qanunun 52-ci maddəsinə əsasən həm də Nax&ccedil;ıvan Muxtar Respublikasında ali məhkəmə organı funksiyasını yerinə yetirir və bundan irəli gələn Nax&ccedil;ıvan Muxtar Respublikasının Konstitusiyası ilə nəzərdə tutulmuş konstitusiya nəzarəti &uuml;zrə səlahiyyətləri həyata ke&ccedil;irir (Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 16, 44-c&uuml; maddələri).</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi bu g&uuml;nədək uzun tarixi yol ke&ccedil;miş, bu tarix Nax&ccedil;ıvan Muxtar Respublikasının, b&uuml;t&ouml;vl&uuml;kdə Azərbaycanın tarixi ilə sıx bağlı olub, &ouml;lkənin və muxtar respublikanın m&uuml;xtəlif zaman kəsiyində yaşadığı d&ouml;vr&uuml; &ouml;z&uuml;ndə əks etdirmişdir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">İlk dəfə Azərbaycan Demokratik Cumhuriyyəti d&ouml;vr&uuml;ndə (1918-1920) başlanılan məhkəmə orqanları sisteminin yaradılması prosesi milli hakimiyyətin s&uuml;gutu nəticəsində başa &ccedil;atdırılmamış qaldı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Lakin, Sovet hakimiyyətinin qurulmasından az m&uuml;ddət sonra Azərbaycanda yenidən məhkəmə orqanlarının təşkilinə başlanıldı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Azərbaycan SSR Mərkəzi İcraiyyə Komitəsinin 1922-ci il 09 dekabr tarixdə ke&ccedil;irilən 2-ci sessiyasında &laquo;Azərbaycan SSR Məhkəmə quruluşu haqqında&raquo; ilk Əsasnamə qəbul edildi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">1922-ci il 30 dekabr tarixdə SSRİ-nin yaradılması ilə əlaqədar digər d&ouml;vlət strukturlarında olduğu kimi Azərbaycan SSR məhkəmə orqanları sistemində də m&uuml;əyyən dəyişikliklər həyata ke&ccedil;irildi. 1924-c&uuml; il 29 oktyabr tarixdə &laquo;SSRİ m&uuml;ttəfiq respublikalarının məhkəmə quruluşunun əsasları haqqında&raquo; qanun qəbul edildikdən sonra buna uyğun olaraq Azərbaycan SSR MİK &ouml;z&uuml;n&uuml;n 1925-ci il 3 yanvar tarixli qanunu ilə Azərbaycan SSR Yuxarı Məhkəməsini Azərbaycan SSR Ali Məhkəməsinə &ccedil;evirdi və buna m&uuml;vafiq olaraq Nax&ccedil;ıvan MSSR-də fəaliyyət g&ouml;stərən b&ouml;lmə də artıq 3 oktyabr 1925-ci il tarixdən Ali Məhkəmənin Nax&ccedil;ıvan MSSR-də b&ouml;lməsi adlandırıldı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Ali Məhkəmənin Nax&ccedil;ıvan MSSR-də fəaliyyət g&ouml;stərən b&ouml;lməsi həm onun səlahiyyətlərinə aid edilmiş cinayət və m&uuml;lki işlər &uuml;zrə birinci instansiya məhkəməsi olaraq, həm də əhatə etdiyi ərazidə təşkil olunmuş xalq məhkəmələri &uuml;&ccedil;&uuml;n yuxarı məhkəmə orqanı kimi təxminən 1934-c&uuml; ilin ortalarınadək fəaliyyət g&ouml;stərdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Azərbaycan SSR MİK-nin və XKS-nin 23 avqust 1934-c&uuml; il tarixli qərarı ilə 6 iyul 1927-ci il tarixdən etibarən respublikada məhkəmə quruluşu məsələlərini tənzimləyən Əsasnaməyə bir sıra dəyişikliklər edildli. Həmin dəyişikliklərdən biri də Azərbaycan SSR Ali Məhkəməsinin Nax&ccedil;ıvan MSSR-də fəaliyyət g&ouml;stərən b&ouml;lməsinin ləğv edilməsi və onun əvəzinə Nax&ccedil;ıvan MSSR Baş Məhkəməsinin yaradılması idi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Qeyd olunan tarixdən yaradılan, 1937-ci ildə Azərbaycan SSR-in yeni Konstitusiyasının qəbul edilməsindən sonra Nax&ccedil;ıvan MSSR Ali Məhkəməsi adını daşıyan məhkəmə m&uuml;xtəlif vaxtlarda m&uuml;vafiq qanunvericiliyin dəyişilməsinə baxmayaraq, b&uuml;t&uuml;n sovet d&ouml;vr&uuml; ərzində demək olar ki, ciddi dəyişikliyə uğramadı və ona aid edilmiş işlərə birinci və yuxarı instansiya məhkəməsi qismində baxmaq, həm&ccedil;inin onun fəaliyyəti dairəsində olan məhkəmələr &uuml;zərində məhkəmə nəzarətini həyata ke&ccedil;irmək funksiyalarıni saxladı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">SSRİ-nin s&uuml;gutundan az m&uuml;ddət əvvəl 1990-cı il 26 iyun tarixdə qəbul edilən &laquo;Azərbaycan SSR-də məhkəmə quruluşu haqqında&raquo; yeni qanun bu sahədə bəzi dəyişkliklərin həyata ke&ccedil;irilməsini nəzərdə tuturdu.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Lakin həmin d&ouml;vrdə SSRİ-də, o c&uuml;mlədən Azərbaycanda cərayan edən hadisələr, ən başlıcası 18 oktyabr 1991-ci ildə Azərbaycanın d&ouml;vlət m&uuml;stəqilliyini əldə etməsi məhkəmə quruluşunun, ədalət m&uuml;hakiməsi qaydalarının daha geniş və k&ouml;kl&uuml; şəkildə dəyişdirilməsini tələb edirdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Buna baxmayaraq, digər sahələrdə olduğu kimi, məhkəmə orqanları sistemində də həmin illərdə aparılan dəyişikliklər yetərli deyildi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Ancaq 1993-c&uuml; ildə xalqın &uuml;mummilli lideri m&ouml;htərəm Heydər Əliyevin hakimiyyətə qayıdışı ilə bu islahatların aparlması &uuml;&ccedil;&uuml;n real şərait yarandı və Prezident H.Əliyevin bilavasitə rəhbərliyi ilə Azərbaycan Respublikasının m&uuml;stəqil, h&uuml;quqi d&ouml;vlət kimi təşəkk&uuml;l tapmasını təmin edə biləcək məhkəmə islahatlarına başlanıldı.s</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Bu islahatların b&uuml;n&ouml;vrəsində m&ouml;htərəm Heydər Əliyevin rəhbərliyi ilə hazırlanmış 12 noyabr 1995-ci ildə &uuml;mumxalq səsverməsi yolu ilə qəbul edilmiş m&uuml;stəqil Azərbycan Respublikasının Konstitusiyası və onun əsasında 10 iyun 1997-ci ildə qəbul edilən &laquo;Məhkəmələr və hakimlər haqqında&raquo; Azərbaycan Respublikasının Qanunu dayanır.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">&laquo;Məhkəmələr və Hakimlər haqqında&raquo; 10 iyun 1997-ci il tarixli Qanun Azərbaycan Respublikasında &uuml;&ccedil;pilləli məhkəmə sistemini bərqərar etdi və m&uuml;vafiq Məcəllələr, o c&uuml;mlədən Azərbaycan Respublikasının M&uuml;lki-Prosessual, Cinayət-Prosessual Məcəllələri qəbul edildikdən sonra 2000-ci ilin sentyabr ayından bu sistem real olaraq fəaliyyət g&ouml;stərməyə başladı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Qanuna g&ouml;rə bu &uuml;&ccedil;pilləli sistem daxilində Nax&ccedil;ıvan MR Ali Məhkəməsinin yeri həm birinci instansiya, həm də ikinci-apellyasiya instansiyası məhkəməsi kimi m&uuml;əyyən edildi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Bu təyinata uyğun olaraq Ali Məhkəmənin tərkibində qanunla onun səlahiyyətlərinə aid edilmiş ağır cinayət işlərinə baxan ağır cinayətlərə dair işlər &uuml;zrə birinci instansiya kollegiyası, muxtar respublikanın ərazisində fəaliyyət g&ouml;stərən rayon (şəhər) məhkəmələrinin cinayət işləri və inzibati xətalara dair materiallar eləcə də m&uuml;lki işlər &uuml;zrə qanuni q&uuml;vvəyə minməmiş qərarlarından verilən apellyasiya şikayətlərinə və protestlərinə apellyasiya məhkəməsi qismində baxan cinayət işləri və inzibati xətalara dair işlər &uuml;zrə, eləcə də m&uuml;lki işlər &uuml;zrə apellyasiya kollegiyaları yaradıldı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Azərbaycan Respublikası Prezidentinin 17 iyun 1999-cu il tarixli Fərmanına əsasən Nax&ccedil;ıvan MR Ali Məhkəməsinin hakimlərinin sayı 14 nəfər m&uuml;əyyən olundu və 2000-ci ilin sentyabrından 2003-c&uuml; ilin yanvarınadək məhkəmə hakim heyəti ilə tam komplektləşdirildi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">2000-ci ilin sentyabrından &ouml;tən d&ouml;vr ərzində bu formada təşkil olunmuş Nax&ccedil;ıvan MR Ali Məhkəməsinin, &uuml;mumiyyətlə Azərbaycanın b&uuml;t&uuml;n məhkəmə orqanlarının fəaliyyəti &uuml;&ccedil;pilləli məhkəmə sisteminin sovet d&ouml;vr&uuml;ndə və 2000-ci ilin sentyabr ayınadək Azərbaycan Respublikasında m&ouml;vcud olan ikipilləli məhkəmə sistemi ilə m&uuml;qayisədə daha m&uuml;tərəqqi məhkəmə quruluşu forması olduğunu s&uuml;but etdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Lakin, bir tərəfdən Azərbaycan Respublikasında gedən inkişaf prosesləri və Azərbaycan Respublikasının Avropa ailəsinə, n&uuml;fuzlu beynəlxalq təşkilatlara daha sıx inteqrasiyası, digər tərəfdən Azərbaycan Respublikasının Apellyasiya və İqtisad məhkəmələrinin b&ouml;lgələrdən uzaqda - Bakı şəhərində təşkil olunmasından t&ouml;rəyən &ccedil;ətinliklər məhkəmə quruluşunda dəyişikliklərin edilməsini bir zərurət kimi meydana gətirdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Həmin məhkəmələrin b&ouml;lgələrdən &ccedil;ox uzaqda yerləşməsi ilə bağlı yaranan problemlər Nax&ccedil;ıvan Muxtar Respublikasına m&uuml;nasibətdə &ouml;z&uuml;n&uuml; daha qabarıq şəkildə biruzə verirdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">&Ccedil;&uuml;nki, birinci instansiya məhkəmələri kimi fəaliyyət g&ouml;stərən Nax&ccedil;ıvan MR Ali Məhkəməsinin ağır cinayətlərə dair işlər &uuml;zrə kollegiyasının, Nax&ccedil;ıvan Muxtar Respublikasının Hərbi Məhkəməsinin və Nax&ccedil;ıvan MR İqtisad Məhkəməsinin qərarlarından verilən protest və şikayətlərə m&uuml;vafiq olaraq Azərbaycan Respublikasının Apellyasiya Məhkəməsində və Azərbaycan Respublikasının İqtisad Məhkəməsində baxılırdı. Nax&ccedil;ıvan Muxtar Respublikasına qarşı Ermənistan tərəfindən tətbiq olunan blokada isə muxtar respublikada yaşayan vətəndaşlarımızın həmin məhkəmələrdə baxılan işlərlə əlaqədar Bakı şəhərinə gedib-gəlmələri &uuml;&ccedil;&uuml;n &ccedil;ox ciddi əngəllər t&ouml;rədirdi.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Azərbaycan Respublikasının 30 dekabr 2005-ci il tarixli Qanunu ilə Məhkəmələr və hakimlər haqqında Qanuna, Azərbaycan Respublikasının bəzi qanunvericilik aktlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 2007-ci il 16 iyun tarixli Qanunu ilə m&uuml;vafiq prosesual qanunvericiliyə əlavə və dəyişikliklərin edilməsi və Azərbaycan Respublikası Prezidenti tərəfindən məhkəmə hakimiyyətinin m&uuml;asirləşdirilməsi məsələlərinə həsr olunmuş 19 yanvar 2006-cı il tarixli Fərmanın verilməsi nəticəsində məhkəmə islahatları n&ouml;vbəti mərhələyə y&uuml;ksəldi və bu mərhələdə Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi də &ccedil;ox ciddi, m&uuml;tərəqqi dəyişikliklərə uğradı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Prosessual h&uuml;quq normalarının dəyişilməsini nəzərdə tutan 2007-ci il 16 iyun tarixli Qanunun 16 iyul 2009-cu ildə q&uuml;vvəyə minməsilə Nax&ccedil;ıvan Muxtar Respublikasında ayrıca Ağır Cinayətlərə Dair İşlər &uuml;zrə Məhkəmə yaradıldı və bununla əlaqədar Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsinin tərkibində olan Ağır Cinayətlərə Dair İşlər &uuml;zrə I instansiya kollegiyası ləğv olundu. Eyni zamanda Ali Məhkəmədə əvvəldən m&ouml;vcud olan M&uuml;lki işlər &uuml;zrə kollegiyadan və Cinayət işləri və inzibati xətalara dair işlər &uuml;zrə kollegiyadan savayı daha iki struktur - İqtisadi m&uuml;bahisələrə dair işlər &uuml;zrə kollegiya və Hərbi məhkəmələrin işləri &uuml;zrə kollegiya yaradıldı.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Yeni kollegiyaların yaradılmasından sonra 2009-cu ilin ilul ayından etibarən artıq Nax&ccedil;ıvan Muxtar Respublikasının Hərbi Məhkəməsinin baxdığı işlər (o c&uuml;mlədən ağır cinayətlərlə bağlı işlər) &uuml;zrə &ccedil;əxarılmış qərarlardan verilən şikayət və protestlərə həm&ccedil;inin Nax&ccedil;ıvan MR İqtisad Məhkəməsinin qərarlarından verilən şikayətlərə m&uuml;vafiq olaraq Hərbi məhkəmələrin işləri &uuml;zrə kollegiyada və İqtisadi m&uuml;bahisələrə dair işlər &uuml;zrə kollegiyada baxılır. Ağır Cinayətlərə dair İşlər &Uuml;zrə Nax&ccedil;ıvan Muxtar Respublikası Məhkəməsinin &ccedil;ıxardığı qərarlardan verilən şikayət və protestlərə isə Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin cinayət işləri və inzibati xətalara dair işlər &uuml;zrə kollegiyasında baxılır.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Bu yeniliklər Ali Məhkəmə tərəfindən işlərə birinci instansiya gaydasında baxılmasını istisna edir və Ali Məhkəmənin sırf apellyasiya instansiyası məhkəməsi kimi fəaliyyət g&ouml;stərməsini nəzərdə tutur.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Bununla yanaşı qanunvericiliyə gətirilən yeniliklər Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin Nax&ccedil;ıvan MR Konstitusiyası ilə təsbit edilən muxtar respublikada konstitusiya nəzarətinin həyata ke&ccedil;irilməsi ilə bağlı funksiyalarına toxunmamışdır.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Məhkəm h&uuml;quq islahatlarının davamı kimi Məhkəmələr və hakimlər haqqında və Məhkəmə-H&uuml;quq Şurası haqqında Azərbaycan Respublikasının qanunlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 22 iyun 2010-cu il tarixli qanununa əsasən Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin kollegiyalarının adları dəyişdirilərək m&uuml;lki kollegiya, inzibati-iqtisadi kollegiya, cinayət kollegiyası və hərbi kollegiya adlandırılmışdır. &ldquo;Məhkəmələr və hakimlər haqqında&rdquo; Azərbaycan Respublikasının Qanununda dəyişiklik edilməsi barədə 9 iyul 2019-cu il tarixli Qanunla Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi m&uuml;lki kollegiyadan, kommersiya kollegiyasından, inzibati kollegiyadan və cinayət kollegiyasından ibarət tərkibdə fəaliyyət g&ouml;stərir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Muxtar Respublikanın Ali Məhkəməsində &laquo;Məhkəmələr və hakimlər haqqında&raquo; Qanununun 54-c&uuml; maddəsinə əsasən Rəyasət Heyəti fəaliyyət g&ouml;stərir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Rəyasət Heyətinin tərkibinə Ali Məhkəmənin sədri, onun m&uuml;avini və kollegiya sədrləri daxildir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Qanuna g&ouml;rə Rəyasət Heyəti ədalət m&uuml;hakiməsi funksiyasını yerinə yetirmir və qanunla onun səlahiyyətlərinə aid edilmiş məhkəmənin fəaliyyətinin təmin edilməsi ilə bağlı digər məsələləri həll edir, o c&uuml;mlədən hakimləri kollegiyalar &uuml;zrə b&ouml;l&uuml;şd&uuml;r&uuml;r, məhkəmə təcr&uuml;bəsinin &uuml;mumiləşdirilməsi və məhkəmə statistikasının təhlili barədə materiallara baxır, qanunvericilik aktlarının d&uuml;zg&uuml;n tətbiq edilməsi barədə muxtar respublikanın rayon (şəhər) məhkəmələrinə metodiki k&ouml;mək g&ouml;stərir, Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi yanında Elmi-Məsləhət Şurasının əsasnaməsini və tərkibini təsdiq edir və bir sıra başqa məsələləri həll edir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Elmi-Məsləhət Şurasının Əsasnaməsi və tərkibi Ali Məhkəmənin Rəyasət Heyətinin qərarı ilə təsdiq edilmiş və 2004-c&uuml; ildən Şura fəaliyyətə başlamışdır.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Nax&ccedil;ıvan Muxtar Respublikasının digər məhkəmələri kimi, Ali Məhkəmənin də fəaliyyətinin m&uuml;asir tələblər səviyyəsində təşkil olunmasında Nax&ccedil;ıvan Muxtar Respublikasında h&uuml;quq institutlarının inkişafı haqqında Azərbaycan Respublikası Prezidentinin 2 noyabr 2006-cı il tarixli Fərmanının b&ouml;y&uuml;k rolu olmuşdur.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Muxtar respublikada qısa m&uuml;ddət ərzində bu Fərmanın realizə edilməsi təmin olunmuş və artıq 2007-ci ilin noyabr ayının 29-da Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin iştirakı ilə Ali Məhkəmənin yeni inzibati binası istifadəyə verilmişdir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Nax&ccedil;ıvan şəhərinin mərkəzində yerləşən bu g&ouml;rkəmli binada hakimlərin, məhkəmə aparatı iş&ccedil;ilərinin keyfiyyətli və səmərəli fəaliyyət g&ouml;stərməsi &uuml;&ccedil;&uuml;n zəruri şərait y&uuml;ksək səviyyədə təmin edilmişdir.</span></p>\r\n<p class=\"about-text\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-size: 1.65rem; text-align: justify; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-size: 12pt;\">Bir tərəfdən qanunvericiliyə gətirilən yeniliklər, digər tərəfdən isə məhkəmələrin maddi təminat məsələlərinə g&ouml;stərilən diqqət, o c&uuml;mlədən hakimlərin, məhkəmə personalının iş şəraitinin m&uuml;asir meyarlar səviyyəsinə &ccedil;atdırılması Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi tərəfindən ədalət m&uuml;hakiməsinin həyata ke&ccedil;irilməsi &uuml;zrə vəzifələrinin keyfiyyətlə yerinə yetirilməsinə, insan h&uuml;quq və azadlıglarının səmərəli şəkildə m&uuml;dafiə olunmasına xidmət edir.</span></p>', '2022-04-29 08:32:00', '2022-04-29 08:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `apparatuses`
--

CREATE TABLE `apparatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apparatuses`
--

INSERT INTO `apparatuses` (`id`, `link`, `title`, `created_at`, `updated_at`) VALUES
(1, '\\judicial_apparatus', 'Naxçıvan Muxtar Respublikası Ali Məhkəməsinin strukturu', '2022-04-30 08:33:59', '2022-04-30 08:33:59'),
(2, 'https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453', 'Ali Məhkəmənin sədri', '2022-04-30 08:38:13', '2022-04-30 08:38:13'),
(3, 'https://courts.gov.az/az/nakhchivansupreme/judge/Novruzov-sgr-Novruz-oglu_437', 'Ali Məhkəmənin sədr müavini', '2022-04-30 08:38:48', '2022-04-30 08:38:48'),
(4, '\\kollegiya', 'Mülki kollegiya', '2022-04-30 08:39:15', '2022-04-30 08:39:15'),
(5, '\\kollegiya', 'İnzibati kollegiya', '2022-04-30 08:39:42', '2022-04-30 08:39:42'),
(6, '\\kollegiya', 'Cinayət kollegiyası', '2022-04-30 08:40:00', '2022-04-30 08:40:16'),
(7, '\\kollegiya', 'Kommersiya kollegiyası', '2022-04-30 08:40:42', '2022-04-30 08:40:42'),
(8, '\\structure', 'Məhkəmə aparatı', '2022-04-30 08:41:02', '2022-04-30 08:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Kollegiya', '<div class=\"category-desc\" style=\"box-sizing: border-box; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px;\">\r\n<h2 style=\"box-sizing: border-box; font-weight: normal; line-height: 15.808px; margin: 0px 0px 8px; font-size: 20.4px; padding: 20px 0px 8px; text-rendering: optimizelegibility;\"><span style=\"font-size: 14pt;\"><strong style=\"box-sizing: border-box; line-height: 15.808px;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin: 5px; float: left;\" src=\"http://www.supremecourt.nakhchivan.az/images/news/Sedr%202018.png\" alt=\"Sedr 2018\" /></strong></span></h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 6pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><strong style=\"box-sizing: border-box;\">Əliyev Qasım Vəli oğlu</strong></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><span style=\"font-size: 14pt;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 15.3333px;\"><span style=\"font-size: 18pt;\">&nbsp;<em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri&nbsp;</span></em></span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></span></strong></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\"><span style=\"font-size: 14pt;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\">&nbsp;Doğulduğu il:</span></strong><span style=\"box-sizing: border-box;\">&nbsp;&nbsp;1971</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\"><span style=\"font-size: 14pt;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\">&nbsp;Təhsili:&nbsp;</span></strong><span style=\"box-sizing: border-box;\">1999,&nbsp;Qafqaz Universiteti. H&uuml;quq fak&uuml;ltəsi</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><span style=\"font-size: 14pt;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><span style=\"font-size: 14pt;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><span style=\"font-size: 14pt;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial; text-align: center;\"><span style=\"font-size: 18pt;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\">İş təcr&uuml;bəsi:&nbsp;</span></strong></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;1995 &ndash; 1996&nbsp; &nbsp; &nbsp;Şərur Rayon Prokurorluğunda katib</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;1996 &ndash; 2003&nbsp; &nbsp; &nbsp;Şərur Rayon Prokurorluğunda dəftərxana m&uuml;diri</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2003 &ndash; 2007&nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Sədərək Rayon Məhkəməsinin hakimi</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2007 &ndash; 2008&nbsp; &nbsp; &nbsp;Nax&ccedil;ıvan Muxtar Respublikası Hərbi Məhkəməsinin sədri</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2008 - 2018 &nbsp;&nbsp;&nbsp;&nbsp; Nax&ccedil;ıvan Muxtar Respublikası Hərbi Məhkəməsinin sədri</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2018 h/h &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2018 h/h &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Məhkəmə-H&uuml;quq Şurasının &uuml;zv&uuml;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2018 - h/h&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Azərbaycan Respublikası &Uuml;mumi Məhkəmə Hakimləri İctimai Birliyinin (Assosiasiyasının) &nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; İdarə Heyətinin &uuml;zv&uuml;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp;2018 -h/h&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Azərbaycan Respublikası Məhkəmə Hakimləri Assosiasiyaları İttifaqının İdarə &nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 7.5pt; line-height: 11.85pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0.0001pt; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 14pt; line-height: 20px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Heyətinin &uuml;zv&uuml;</span></p>\r\n</div>', '2022-04-30 03:15:00', '2022-04-30 03:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Əlaqə', 'contacts\\April2022\\koCdx6LCoPqIzGEytLr0.png', '2022-04-28 14:35:49', '2022-04-28 14:35:49'),
(2, 'Qəbul qrafiki', 'contacts\\April2022\\EReX6XA4QHAERXXQc40W.png', '2022-04-29 01:31:52', '2022-04-29 01:31:52'),
(3, 'Onlayn müraciət', 'contacts\\April2022\\XcS00XBt7QxCjwMgTQ7l.png', '2022-04-29 01:33:01', '2022-04-29 01:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(24, 4, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(25, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(26, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(27, 5, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(28, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(30, 5, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 4),
(31, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 5),
(32, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 6),
(45, 13, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(46, 13, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(47, 13, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(48, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(49, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(50, 14, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(51, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(52, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(53, 14, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 4),
(54, 14, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 5),
(55, 14, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 6),
(56, 15, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 15, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 15, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 15, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 16, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(64, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(65, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(66, 17, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 17, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(68, 17, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(69, 17, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(70, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(71, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(72, 18, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(73, 18, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(74, 18, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{}', 3),
(75, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(76, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(77, 19, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(78, 19, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(79, 19, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 3),
(80, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(81, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(82, 20, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(83, 20, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(84, 20, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 3),
(85, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(86, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(87, 21, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(88, 21, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 2),
(89, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 3),
(90, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 4),
(91, 22, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 22, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(93, 22, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(94, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(95, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(96, 23, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(97, 23, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(98, 23, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(99, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(100, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(101, 24, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 24, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(103, 24, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{\"format\":\"%Y-%m-%d\"}', 3),
(104, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(105, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(106, 25, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(107, 25, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(108, 25, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(109, 25, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(110, 25, 'category', 'select_dropdown', 'Category', 1, 1, 1, 1, 1, 1, '{}', 5),
(111, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(112, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(131, 29, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 29, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(133, 29, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(134, 29, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(135, 29, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(136, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(143, 31, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(144, 31, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 2),
(145, 31, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(146, 31, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(147, 31, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(148, 31, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(149, 32, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(150, 32, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(151, 32, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(152, 32, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 4),
(153, 32, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(154, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(155, 33, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(156, 33, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(157, 33, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(158, 33, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 4),
(159, 33, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(160, 33, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(161, 34, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(162, 34, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(163, 34, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(164, 34, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(165, 35, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(166, 35, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(167, 35, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 3),
(168, 35, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(169, 35, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(170, 35, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
(171, 36, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(172, 36, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(173, 36, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{}', 3),
(174, 36, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(175, 36, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(176, 37, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(177, 37, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(178, 37, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 3),
(179, 37, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(180, 37, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 5),
(181, 37, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 6),
(182, 37, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 7),
(183, 24, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 3),
(184, 24, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 5),
(185, 38, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(186, 38, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(187, 38, 'pdf', 'file', 'Pdf', 1, 1, 1, 1, 1, 1, '{\"max\":10,\"min\":0,\"expanded\":true,\"show_folders\":true,\"show_toolbar\":true,\"allow_upload\":true,\"allow_move\":true,\"allow_delete\":true,\"allow_create_folder\":true,\"allow_rename\":true,\"allow_crop\":true,\"allowed\":[],\"hide_thumbnails\":false,\"quality\":90,\"watermark\":{\"source\":\"...\",\"position\":\"top-left\",\"x\":0,\"y\":0}}', 3),
(188, 38, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 4),
(189, 38, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 5),
(190, 40, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(191, 40, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 2),
(192, 40, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(193, 40, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 4),
(194, 40, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 5),
(195, 40, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 6),
(196, 40, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 7),
(197, 5, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 4),
(198, 5, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 5),
(199, 41, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(200, 41, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(201, 41, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 3),
(202, 41, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{\"tinymceOptions\":{\"toolbar\":\"styleselect bold italic underline | fontselect fontsizeselect | forecolor backcolor | alignleft aligncenter  alignright | bullist numlist outdent indent | link image table | code\"}}', 4),
(203, 41, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{\"format\":\"%Y-%m-%d\"}', 5),
(204, 41, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{\"format\":\"%Y-%m-%d\"}', 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(4, 'languages', 'languages', 'Language', 'Languages', NULL, 'App\\Models\\Language', NULL, 'App\\Http\\Controllers\\LanguageController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(5, 'news', 'news', 'News', 'News', 'voyager-news', 'App\\Models\\News', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-04-28 08:40:21', '2022-05-04 12:26:27'),
(13, 'forpersons', 'forpersons', 'Forperson', 'Forpeople', 'voyager-people', 'App\\Models\\Forpersons', NULL, 'App\\Http\\Controllers\\ForpersonsController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-04-29 02:03:24', '2022-04-29 02:03:45'),
(14, 'services', 'services', 'Service', 'Services', NULL, 'App\\Models\\Service', NULL, 'App\\Http\\Controllers\\ServiceController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(15, 'nmrcourts', 'nmrcourts', 'Nmrcourt', 'Nmrcourts', 'voyager-treasure', 'App\\Models\\Nmrcourt', NULL, 'App\\Http\\Controllers\\NmrcourtController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(16, 'langs', 'langs', 'Lang', 'Langs', NULL, 'App\\Models\\Lang', NULL, 'App\\Http\\Controllers\\LangController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(17, 'usefullinks', 'usefullinks', 'Usefullink', 'Usefullinks', 'voyager-credit-cards', 'App\\Models\\Usefullink', NULL, 'App\\Http\\Controllers\\UsefullinkController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(18, 'footersocials', 'footersocials', 'Footersocial', 'Footersocials', 'voyager-params', 'App\\Models\\Footersocial', NULL, 'App\\Http\\Controllers\\FootersocialController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-04-29 06:04:39', '2022-04-29 06:04:55'),
(19, 'abouts', 'abouts', 'About', 'Abouts', 'voyager-company', 'App\\Models\\About', NULL, 'App\\Http\\Controllers\\AboutController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-04-29 08:31:20', '2022-04-29 08:31:20'),
(20, 'colleges', 'colleges', 'College', 'Colleges', NULL, 'App\\Models\\College', NULL, 'App\\Http\\Controllers\\CollegeController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(21, 'structures', 'structures', 'Structure', 'Structures', 'voyager-person', 'App\\Models\\Structure', NULL, 'App\\Http\\Controllers\\StructureController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"image\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-04-30 04:47:39', '2022-04-30 04:51:21'),
(22, 'apparatuses', 'apparatuses', 'Apparatus', 'Apparatuses', 'voyager-pie-chart', 'App\\Models\\Apparatus', NULL, 'App\\Http\\Controllers\\ApparatusController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(23, 'court90s', 'court90s', 'Court90', 'Court90s', NULL, 'App\\Models\\Court90', NULL, 'App\\Http\\Controllers\\Court90Controller', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-04-30 14:41:30', '2022-05-03 08:02:17'),
(24, 'supremecourts', 'supremecourts', 'Supremecourt', 'Supremecourts', 'voyager-star', 'App\\Models\\Supremecourt', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-03 08:20:06', '2022-05-04 06:44:52'),
(25, 'categories', 'categories', 'Category', 'Categories', NULL, 'App\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-03 10:52:49', '2022-05-03 10:52:49'),
(29, 'decisions', 'decisions', 'Decision', 'Decisions', NULL, 'App\\Models\\Decision', NULL, 'App\\Http\\Controllers\\DecisionController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(31, 'azlegalacts', 'azlegalacts', 'Azlegalact', 'Azlegalacts', 'voyager-folder', 'App\\Models\\Azlegalact', NULL, 'App\\Http\\Controllers\\AzlegalactController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(32, 'legalacts', 'legalacts', 'Legalact', 'Legalacts', 'voyager-dot-3', 'App\\Models\\Legalact', NULL, 'App\\Http\\Controllers\\LegalactController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(33, 'decisionpresidia', 'decisionpresidia', 'Decisionpresidium', 'Decisionpresidia', 'voyager-terminal', 'App\\Models\\Decisionpresidium', NULL, 'App\\Http\\Controllers\\DecisionpresidiumController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(34, 'galleries', 'galleries', 'Gallery', 'Galleries', 'voyager-photos', 'App\\Models\\Gallery', NULL, 'App\\Http\\Controllers\\GalleryController', NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"image\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(35, 'videogalleries', 'videogalleries', 'Videogallery', 'Videogalleries', 'voyager-credit-cards', 'App\\Models\\Videogallery', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-04 04:20:15', '2022-05-04 04:37:19'),
(36, 'faqs', 'faqs', 'Faq', 'Faqs', 'voyager-question', 'App\\Models\\Faq', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-04 04:49:19', '2022-05-04 05:26:57'),
(37, 'educationmaterials', 'educationmaterials', 'Educationmaterial', 'Educationmaterials', 'voyager-resize-small', 'App\\Models\\Educationmaterial', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(38, 'internationaldocuments', 'internationaldocuments', 'Internationaldocument', 'Internationaldocuments', NULL, 'App\\Models\\Internationaldocument', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-04 07:13:42', '2022-05-04 07:28:47'),
(40, 'measures', 'measures', 'Measure', 'Measures', 'voyager-edit', 'App\\Models\\Measures', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(41, 'singlenews', 'singlenews', 'Singlenews', 'Singlenews', 'voyager-crop', 'App\\Models\\Singlenews', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"desc\",\"default_search_key\":null}', '2022-05-04 09:01:49', '2022-05-04 09:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `decisionpresidia`
--

CREATE TABLE `decisionpresidia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `decisionpresidia`
--

INSERT INTO `decisionpresidia` (`id`, `image`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'decisionpresidia\\May2022\\ZLT5vwguEoje4uET2cyY.png', 'Qərar N1 2022-ci il', '\\test', '2022-05-04 02:14:00', '2022-05-04 02:20:56'),
(2, 'decisionpresidia\\May2022\\M7ufsDUIceclwX29lguC.png', 'Qərar N1 2021-ci il', '/test', '2022-05-04 02:22:53', '2022-05-04 02:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `decisions`
--

CREATE TABLE `decisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `decisions`
--

INSERT INTO `decisions` (`id`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'as', 'sas', 'decisions\\May2022\\h2NCO0QRkhss3bquroqQ.png', '2022-05-03 14:28:19', '2022-05-03 14:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `educationmaterials`
--

CREATE TABLE `educationmaterials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educationmaterials`
--

INSERT INTO `educationmaterials` (`id`, `title`, `slug`, `link`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Maarifləndirici materiallar1', 'maarifl-ndirici-materiallar1', 'maarifləndirici materiallar', '<p style=\"text-align: justify;\"><span style=\"font-size: 14pt;\"><a class=\"speech-link\" style=\"box-sizing: border-box; color: black; text-decoration-line: none; margin: 0px; padding: 0px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;\">Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the class.</a></span></p>', '2022-05-04 06:22:34', '2022-05-04 06:22:34'),
(2, 'Maarifləndirici materiallar2', 'maarifl-ndirici-materiallar2', '\\educationmaterials', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;\">Where does it come from?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2022-05-04 06:33:02', '2022-05-04 06:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tez-tez verilən suallar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;\">What is Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-05-04 05:27:00', '2022-05-04 06:02:11'),
(2, 'tez-tez verilən suallar 2', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;\">What is Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-05-04 06:02:27', '2022-05-04 06:02:27'),
(3, 'Tez-tez verilən suallar 3', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: #000000;\">What is Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-05-04 06:03:02', '2022-05-04 06:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `footersocials`
--

CREATE TABLE `footersocials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forcitizens`
--

CREATE TABLE `forcitizens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forpersons`
--

CREATE TABLE `forpersons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forpersons`
--

INSERT INTO `forpersons` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Appelyasiya şikayətinin verilməsi qaydası', '/contact', '2022-04-29 02:04:36', '2022-04-29 02:04:36'),
(2, 'Kassasiya şikayətinin  verilməsi qaydası', 'http://supremecourt.gov.az/static/view/32', '2022-04-29 02:06:00', '2022-04-29 02:11:32'),
(3, 'Elektron kabinetə keçid', 'https://e-mehkeme.gov.az/Private', '2022-04-29 02:07:05', '2022-04-29 02:07:05'),
(4, 'Məhkəmə rüsumlarının ödənilməsi', 'https://courts.gov.az/az/main/page/Mhkm-rusumlarinin-odnilmsi_3076', '2022-04-29 02:07:00', '2022-04-29 02:07:58'),
(5, 'Baxılan işlər', 'https://e-mehkeme.gov.az/Public/Cases?courtid=113', '2022-04-29 02:08:22', '2022-04-29 02:08:22'),
(6, 'Məhkəmə aktları', 'https://e-mehkeme.gov.az/Public/Anonymizedecisions?courtid=113', '2022-04-29 02:08:56', '2022-04-29 02:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'galleries\\May2022\\yEEhewVEJRwVT2tRC8Vo.gif', '2022-05-04 03:07:45', '2022-05-04 03:07:45'),
(2, 'galleries\\May2022\\yV9VgF0mqA6si7jlLhz7.png', '2022-05-04 04:14:38', '2022-05-04 04:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internationaldocuments`
--

CREATE TABLE `internationaldocuments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internationaldocuments`
--

INSERT INTO `internationaldocuments` (`id`, `title`, `pdf`, `created_at`, `updated_at`) VALUES
(3, 'AVROPA SOSİAL XARTİYASI', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\MsOMcQRHHEVXYdv0SAAr.pdf\",\"original_name\":\"byx_AvropaSosialXartiyasi.pdf\"}]', '2022-05-04 08:02:00', '2022-05-04 08:10:41'),
(4, 'VARŞAVA BƏYANNAMƏSİ', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\joosBNmkFlAtKGQYJbZB.pdf\",\"original_name\":\"Varshava_Beyannamesi.pdf\"}]', '2022-05-04 08:03:00', '2022-05-04 08:07:55'),
(5, 'AVROPA ŞURASININ İNSAN ALVERİNƏ DAİR KONVENSİYASI VƏ İZAHAT MƏRUZƏSİ', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\64AGw4usZ3SuDSxBjUlG.pdf\",\"original_name\":\"byx_InsanAlveriAleyhineTedbirlereDairAvropaSurasininKonvensiyasi.pdf\"}]', '2022-05-04 08:04:29', '2022-05-04 08:04:29'),
(6, 'MƏHKƏMƏ QƏRARLARININ İCRASI HAQQINDA TÖVSİYYƏ', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\FfTWn19dqDeeDWXDMtYT.pdf\",\"original_name\":\"byx_MehkemeQerarlarininIcrasiHaqqinda.pdf\"}]', '2022-05-04 08:05:00', '2022-05-04 08:08:37'),
(7, 'İNSAN HÜQUQLARININ VƏ ƏSAS  AZADLIQLARIN MÜDAFİƏSİ HAQQINDA KONVENSİYA', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\I2d74VdNBX8OMOZRpH75.pdf\",\"original_name\":\"byx_InsanHuquqlariKonvensiyasi.pdf\"}]', '2022-05-04 08:05:00', '2022-05-04 08:09:28'),
(8, 'AVROPA ŞURASININ NİZAMNAMƏSİ', '[{\"download_link\":\"internationaldocuments\\\\May2022\\\\DEvCEqK8OhAFTfHeASsO.pdf\",\"original_name\":\"byx_AvropaSurasininNizamnamesi.pdf\"}]', '2022-05-04 08:06:00', '2022-05-04 08:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'langs\\April2022\\1fF8VkOpOJBKmEAi2T6c.gif', '2022-04-29 04:34:57', '2022-04-29 04:34:57'),
(2, 'langs\\April2022\\nJavidypNWmXDfF6F8JP.gif', '2022-04-29 04:35:18', '2022-04-29 04:35:18'),
(3, 'langs\\April2022\\MVh3kt2uQeW0zGd97yYt.png', '2022-04-29 04:35:31', '2022-04-29 04:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'languages\\April2022\\RMQwvIFM3VLEygbr46zq.gif', 'Az', '2022-04-28 08:09:13', '2022-04-28 08:09:13'),
(2, 'languages\\April2022\\26L3BBvF3TzKdXeSPVcC.gif', 'En', '2022-04-28 08:09:37', '2022-04-28 08:09:37'),
(3, 'languages\\April2022\\i3GcPklMffqA2jup4rR0.png', 'Ru', '2022-04-28 08:09:52', '2022-04-28 08:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `legalacts`
--

CREATE TABLE `legalacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legalacts`
--

INSERT INTO `legalacts` (`id`, `image`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'legalacts\\May2022\\Ho8Kpelqb1DEGANRG2jk.png', 'Konstitusiya, Məcəllələr və Qanunlar', '\\decision', '2022-05-04 01:36:00', '2022-05-04 01:43:41'),
(2, 'legalacts\\May2022\\pnybVFUhsd4FgpoUXaou.png', 'Fərman və Sərəncamlar', 'https://president.az/az/documents/category/decrees', '2022-05-04 01:51:39', '2022-05-04 01:51:39'),
(3, 'legalacts\\May2022\\OcHSkkR28XGgrOTqLtqI.png', 'Milli Məclisin Qərarları', 'https://www.meclis.gov.az/cat-qanun.php?cat=72&lang=az', '2022-05-04 01:52:16', '2022-05-04 01:52:16'),
(4, 'legalacts\\May2022\\lJIaDz29yzGacAXPSKKL.png', 'Konstitusiya Məhkəməsinin Qərarları', 'http://www.constcourt.gov.az/az/decisions', '2022-05-04 01:52:54', '2022-05-04 01:52:54'),
(5, 'legalacts\\May2022\\Uyjks6scJamJbLfQLCqG.png', 'Ali Məhkəmənin Plenum Qərarları', 'http://supremecourt.gov.az/category/view/16', '2022-05-04 01:53:26', '2022-05-04 01:53:26'),
(6, 'legalacts\\May2022\\e3SqJNiw7KPLy5f37jpB.png', 'Naxçıvan Muxtar Respublikasının hüquqi aktları', 'http://huquqiaktlar.nakhchivan.az/Akts.aspx', '2022-05-04 01:54:18', '2022-05-04 01:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `measures`
--

CREATE TABLE `measures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`id`, `image`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'measures\\May2022\\GKM0JZK4ZJ6K3zR3O8AA.png', 'Tedbir1', 'tedbir1', '<p>Tedbir1 content</p>', '2022-05-04 08:30:36', '2022-05-04 08:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(2, 'mainMenu', '2022-04-27 15:38:05', '2022-04-27 15:38:05'),
(3, 'dropDownMenu', '2022-04-28 01:33:03', '2022-04-28 01:33:03'),
(4, 'hamburgerNavbar', '2022-04-28 04:02:30', '2022-04-28 04:02:30'),
(5, 'socialMedia', '2022-04-28 04:23:56', '2022-04-28 04:23:56'),
(7, 'footerCopyright', '2022-04-29 06:19:46', '2022-04-29 06:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2022-04-27 14:17:11', '2022-04-27 14:17:11', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2022-04-27 14:17:11', '2022-04-27 14:17:11', 'voyager.settings.index', NULL),
(11, 2, 'Əsas səhİfə', '', '_self', 'voyager-home', '#000000', NULL, 15, '2022-04-27 15:39:33', '2022-04-27 16:06:45', 'home', 'null'),
(12, 2, 'Məhkəmə', '', '_self', NULL, '#000000', NULL, 16, '2022-04-27 15:43:05', '2022-04-27 15:43:05', NULL, NULL),
(13, 2, 'Hüquqİ aktlar', '', '_self', NULL, '#000000', NULL, 17, '2022-04-27 15:43:32', '2022-04-27 16:05:49', NULL, ''),
(14, 2, 'Məhkəmə sənədlərİ', '', '_self', NULL, '#000000', NULL, 18, '2022-04-27 15:43:48', '2022-04-27 16:06:02', NULL, ''),
(15, 2, 'Mətbuat xidmətİ', '', '_self', NULL, '#000000', NULL, 19, '2022-04-27 15:44:10', '2022-04-27 16:06:11', NULL, ''),
(16, 2, 'Hüquqİ maarİfləndİrmə', '', '_self', NULL, '#000000', NULL, 20, '2022-04-27 15:44:24', '2022-04-27 16:06:26', NULL, ''),
(17, 3, 'home', '', '_self', NULL, '#000000', NULL, 1, '2022-04-28 01:33:40', '2022-04-29 03:36:26', NULL, ''),
(18, 3, 'Məhkəmə', '', '_self', NULL, '#000000', NULL, 2, '2022-04-28 01:52:27', '2022-04-28 03:34:00', 'court', 'null'),
(19, 3, 'Hüquqİ aktlar', '', '_self', NULL, '#000000', NULL, 3, '2022-04-28 01:52:47', '2022-04-28 03:45:23', NULL, 'null'),
(20, 3, 'Ümumi məlumat', '', '_self', NULL, '#000000', 18, 1, '2022-04-28 01:53:07', '2022-04-29 09:20:23', '\\about', 'null'),
(21, 3, 'Məhkəmənin sədri', '', '_self', NULL, '#000000', 18, 2, '2022-04-28 01:53:22', '2022-04-30 03:11:23', '/college', 'null'),
(22, 3, 'Rəyasət heyəti', '', '_blank', NULL, '#000000', 18, 3, '2022-04-28 01:53:33', '2022-04-30 03:59:14', 'https://courts.gov.az/az/nakhchivansupreme/board/Ryast-Heyti_5', 'null'),
(23, 3, 'Hakimlər', '', '_blank', NULL, '#000000', 18, 4, '2022-04-28 03:36:58', '2022-04-30 04:02:00', 'https://courts.gov.az/az/nakhchivansupreme/judges', 'null'),
(24, 3, 'Məhkəmənin strukturu', '', '_self', NULL, '#000000', 18, 5, '2022-04-28 03:37:24', '2022-04-30 08:11:51', '\\structure', 'null'),
(25, 3, 'Məhkəmə aparatı', '', '_self', NULL, '#000000', 18, 6, '2022-04-28 03:42:28', '2022-04-30 08:47:34', '\\apparatus', 'null'),
(26, 3, 'Ali Məhkəmə - 90', '', '_self', NULL, '#000000', 18, 7, '2022-04-28 03:42:59', '2022-05-03 08:17:31', '\\supremecourt', 'null'),
(27, 3, 'Azərbaycan Respublikasının hüquqi aktları', '', '_self', NULL, '#000000', 19, 1, '2022-04-28 03:46:23', '2022-05-04 01:35:21', '\\legalact', 'null'),
(28, 3, 'Naxçıvan Muxtar Respublikasının hüquqi aktları', '', '_self', NULL, '#000000', 19, 2, '2022-04-28 03:47:35', '2022-04-28 03:48:51', 'http://huquqiaktlar.nakhchivan.az/Akts.aspx', 'null'),
(29, 3, 'Beynəlxalq hüquqi sənədlər', '', '_self', NULL, '#000000', 19, 3, '2022-04-28 03:48:07', '2022-05-04 07:26:41', 'internationaldocument', 'null'),
(30, 3, 'Məhkəmə sənədlərİ', '', '_self', NULL, '#000000', NULL, 4, '2022-04-28 03:49:32', '2022-04-28 03:54:07', NULL, ''),
(31, 3, 'Rəyasət heyətinin qərarları', '', '_self', NULL, '#000000', 30, 1, '2022-04-28 03:50:03', '2022-05-04 02:12:09', '\\decisionpresidia', 'null'),
(32, 3, 'Məhkəmə aktları', '', '_self', NULL, '#000000', 30, 2, '2022-04-28 03:50:32', '2022-04-28 03:51:21', 'https://e-mehkeme.gov.az/Public/Anonymizedecisions?courtid=113', NULL),
(33, 3, 'Avropa İnsan hüquqları məhkəməsinin qərarları', '', '_self', NULL, '#000000', 30, 3, '2022-04-28 03:51:10', '2022-04-28 03:51:22', 'https://hudoc.echr.coe.int/eng#{%22documentcollectionid2%22:[%22GRANDCHAMBER%22,%22CHAMBER%22]}', NULL),
(34, 3, 'Mətbuat xİdmətİ', '', '_self', NULL, '#000000', NULL, 5, '2022-04-28 03:53:32', '2022-04-28 03:54:11', NULL, NULL),
(35, 3, 'Xəbərlər', '', '_self', NULL, '#000000', 34, 1, '2022-04-28 03:53:55', '2022-05-04 08:48:51', '\\news', 'null'),
(36, 3, 'Hesabatlar', '', '_self', NULL, '#000000', 34, 2, '2022-04-28 03:54:23', '2022-04-28 03:55:00', NULL, NULL),
(37, 3, 'Çıxışlar', '', '_self', NULL, '#000000', 34, 3, '2022-04-28 03:54:49', '2022-04-28 03:55:02', NULL, NULL),
(38, 3, 'Foto materiallar', '', '_self', NULL, '#000000', 34, 4, '2022-04-28 03:55:18', '2022-05-04 03:08:16', '\\gallery', 'null'),
(39, 3, 'Video materiallar', '', '_self', NULL, '#000000', 34, 5, '2022-04-28 03:55:33', '2022-05-04 04:21:01', '\\videogallery', 'null'),
(40, 3, 'Məqalələr', '', '_self', NULL, '#000000', 34, 6, '2022-04-28 03:55:47', '2022-04-28 03:55:57', NULL, NULL),
(41, 3, 'Hüquqİ Maarİfləndİrmə', '', '_self', NULL, '#000000', NULL, 6, '2022-04-28 03:56:29', '2022-04-28 03:57:40', NULL, NULL),
(42, 3, 'Sual-cavab', '', '_self', NULL, '#000000', 41, 1, '2022-04-28 03:57:05', '2022-05-04 04:51:39', '\\faq', 'null'),
(43, 3, 'Maarifləndirici materiallar', '', '_self', NULL, '#000000', 41, 2, '2022-04-28 03:57:22', '2022-05-04 06:17:00', '\\educationmaterial', 'null'),
(44, 3, 'Tədbirlər', '', '_self', NULL, '#000000', 41, 3, '2022-04-28 03:57:36', '2022-05-04 08:23:51', '\\measures', 'null'),
(46, 4, 'Məhkəmə', '', '_self', NULL, '#000000', NULL, 1, '2022-04-28 04:11:26', '2022-04-28 04:37:15', NULL, 'null'),
(47, 4, 'Məhkəmənin sədri', '', '_self', NULL, '#000000', 46, 2, '2022-04-28 04:34:40', '2022-04-28 06:01:15', NULL, 'null'),
(48, 4, 'Hüquqi aktlar', '', '_self', NULL, '#000000', NULL, 2, '2022-04-28 04:34:56', '2022-04-28 06:02:32', NULL, 'null'),
(49, 4, 'Mətbuat xidməti', '', '_self', NULL, '#000000', NULL, 4, '2022-04-28 04:35:14', '2022-04-28 06:15:32', NULL, NULL),
(51, 4, 'Ümumi məlumat', '', '_self', NULL, '#000000', 46, 1, '2022-04-28 04:36:02', '2022-04-28 04:37:19', NULL, NULL),
(52, 4, 'Rəyasət heyəti', '', '_self', NULL, '#000000', 46, 3, '2022-04-28 06:01:40', '2022-04-28 06:01:50', NULL, NULL),
(53, 4, 'Məhkəmə sənədləri', '', '_self', NULL, '#000000', NULL, 3, '2022-04-28 06:02:50', '2022-04-28 06:15:32', NULL, NULL),
(55, 4, 'Hüquqi maarifləndirmə', '', '_self', NULL, '#000000', NULL, 5, '2022-04-28 06:03:36', '2022-04-28 06:20:35', NULL, NULL),
(56, 4, 'Hakimlər', '', '_self', NULL, '#000000', 46, 4, '2022-04-28 06:04:07', '2022-04-28 06:05:35', NULL, NULL),
(57, 4, 'Məhkəmənin strukturu', '', '_self', NULL, '#000000', 46, 5, '2022-04-28 06:04:25', '2022-04-28 06:05:42', NULL, NULL),
(58, 4, 'Məhkəmə aparatı', '', '_self', NULL, '#000000', 46, 6, '2022-04-28 06:04:50', '2022-04-28 06:05:53', NULL, NULL),
(59, 4, 'Ali məhkəmə - 90', '', '_self', NULL, '#000000', 46, 7, '2022-04-28 06:05:17', '2022-04-28 06:05:57', NULL, NULL),
(60, 4, 'Azərbaycan Respublikasının hüquqi aktları', '', '_self', NULL, '#000000', 48, 1, '2022-04-28 06:14:32', '2022-04-28 06:15:16', NULL, NULL),
(61, 4, 'Naxçıvan Muxtar Respublikasının hüquqi aktları', '', '_self', NULL, '#000000', 48, 2, '2022-04-28 06:14:47', '2022-04-28 06:15:21', NULL, NULL),
(62, 4, 'Beynəlxalq hüquqi sənədlər', '', '_self', NULL, '#000000', 48, 3, '2022-04-28 06:15:00', '2022-04-28 06:15:24', NULL, NULL),
(63, 4, 'Rəyasət heyətinin qərarları', '', '_self', NULL, '#000000', 53, 1, '2022-04-28 06:15:56', '2022-04-28 06:16:32', NULL, NULL),
(64, 4, 'Məhkəmə aktları', '', '_self', NULL, '#000000', 53, 2, '2022-04-28 06:16:09', '2022-04-28 06:16:39', NULL, NULL),
(65, 4, 'Avropa İnsan Hüquqları Məhkəməsinin qərarları', '', '_self', NULL, '#000000', 53, 3, '2022-04-28 06:16:23', '2022-04-28 06:16:49', NULL, NULL),
(66, 4, 'Xəbərlər', '', '_self', NULL, '#000000', 49, 1, '2022-04-28 06:17:06', '2022-04-28 06:18:41', NULL, NULL),
(67, 4, 'Hesabatlar', '', '_self', NULL, '#000000', 49, 2, '2022-04-28 06:17:17', '2022-04-28 06:18:45', NULL, NULL),
(68, 4, 'Çıxışlar', '', '_self', NULL, '#000000', 49, 3, '2022-04-28 06:17:49', '2022-04-28 06:18:52', NULL, NULL),
(69, 4, 'Foto materiallar', '', '_self', NULL, '#000000', 49, 4, '2022-04-28 06:18:02', '2022-04-28 06:18:55', NULL, NULL),
(70, 4, 'Video materiallar', '', '_self', NULL, '#000000', 49, 5, '2022-04-28 06:18:17', '2022-04-28 06:18:57', NULL, NULL),
(71, 4, 'Məqalələr', '', '_self', NULL, '#000000', 49, 6, '2022-04-28 06:18:34', '2022-04-28 06:19:00', NULL, NULL),
(72, 4, 'Sual-cavab', '', '_self', NULL, '#000000', 55, 1, '2022-04-28 06:19:51', '2022-04-28 06:20:35', NULL, NULL),
(73, 4, 'Maarifləndirici materiallar', '', '_self', NULL, '#000000', 55, 2, '2022-04-28 06:20:06', '2022-04-28 06:20:37', NULL, NULL),
(74, 4, 'Tədbirlər', '', '_self', NULL, '#000000', 55, 3, '2022-04-28 06:20:22', '2022-04-28 06:20:44', NULL, NULL),
(75, 5, 'youtube', 'https://www.youtube.com/', '_blank', 'fa-youtube', '#000000', NULL, 21, '2022-04-28 06:26:44', '2022-04-28 06:42:04', NULL, ''),
(76, 5, 'facebook', 'https://www.facebook.com/', '_blank', 'fa-facebook-f', '#000000', NULL, 22, '2022-04-28 06:27:42', '2022-04-28 06:51:57', NULL, ''),
(77, 5, 'twitter', 'https://twitter.com/?lang=tr', '_blank', 'fa-twitter', '#000000', NULL, 23, '2022-04-28 06:28:28', '2022-04-28 06:42:21', NULL, ''),
(78, 5, 'instagram', 'https://www.instagram.com/', '_blank', 'fa-instagram', '#000000', NULL, 24, '2022-04-28 06:28:54', '2022-04-28 06:42:37', NULL, ''),
(79, 5, 'telegram', 'https://telegram.org/', '_blank', 'fa-telegram', '#000000', NULL, 25, '2022-04-28 06:29:38', '2022-04-28 06:42:52', NULL, ''),
(80, 1, 'Languages', '', '_self', NULL, NULL, NULL, 26, '2022-04-28 08:04:31', '2022-04-28 08:04:31', 'voyager.languages.index', NULL),
(81, 1, 'News', '', '_self', NULL, NULL, NULL, 27, '2022-04-28 08:40:21', '2022-04-28 08:40:21', 'voyager.news.index', NULL),
(84, 1, 'Forpeople', '', '_self', NULL, NULL, NULL, 29, '2022-04-29 02:03:24', '2022-04-29 02:03:24', 'voyager.forpersons.index', NULL),
(85, 1, 'Services', '', '_self', NULL, NULL, NULL, 30, '2022-04-29 02:22:54', '2022-04-29 02:22:54', 'voyager.services.index', NULL),
(86, 1, 'Nmrcourts', '', '_self', 'voyager-treasure', NULL, NULL, 31, '2022-04-29 03:16:30', '2022-04-29 03:16:30', 'voyager.nmrcourts.index', NULL),
(87, 1, 'Langs', '', '_self', NULL, NULL, NULL, 32, '2022-04-29 04:33:42', '2022-04-29 04:33:42', 'voyager.langs.index', NULL),
(88, 1, 'Usefullinks', '', '_self', 'voyager-credit-cards', NULL, NULL, 33, '2022-04-29 04:45:16', '2022-04-29 04:45:16', 'voyager.usefullinks.index', NULL),
(89, 1, 'Footersocials', '', '_self', NULL, NULL, NULL, 34, '2022-04-29 06:04:39', '2022-04-29 06:04:39', 'voyager.footersocials.index', NULL),
(90, 7, '© 2022 Tərtibat Və Proqramlaşdırma Naxçıvan muxtar respublikası rabitə və yeni texnologiyalar Nazirliyiaaa', 'http://rabite.nmr.az/', '_blank', NULL, '#000000', NULL, 35, '2022-04-29 06:21:49', '2022-04-29 06:23:38', NULL, ''),
(91, 1, 'Abouts', '', '_self', 'voyager-company', NULL, NULL, 36, '2022-04-29 08:31:21', '2022-04-29 08:31:21', 'voyager.abouts.index', NULL),
(92, 1, 'Colleges', '', '_self', NULL, NULL, NULL, 37, '2022-04-29 09:32:27', '2022-04-29 09:32:27', 'voyager.colleges.index', NULL),
(93, 1, 'Structures', '', '_self', NULL, NULL, NULL, 38, '2022-04-30 04:47:39', '2022-04-30 04:47:39', 'voyager.structures.index', NULL),
(94, 1, 'Apparatuses', '', '_self', 'voyager-pie-chart', NULL, NULL, 39, '2022-04-30 08:32:14', '2022-04-30 08:32:14', 'voyager.apparatuses.index', NULL),
(95, 1, 'Court90s', '', '_self', NULL, NULL, NULL, 40, '2022-04-30 14:41:30', '2022-04-30 14:41:30', 'voyager.court90s.index', NULL),
(96, 1, 'Supremecourts', '', '_self', 'voyager-star', NULL, NULL, 41, '2022-05-03 08:20:06', '2022-05-03 08:20:06', 'voyager.supremecourts.index', NULL),
(97, 1, 'Categories', '', '_self', NULL, NULL, NULL, 42, '2022-05-03 10:52:50', '2022-05-03 10:52:50', 'voyager.categories.index', NULL),
(107, 1, 'Decisions', '', '_self', NULL, NULL, NULL, 50, '2022-05-03 14:27:56', '2022-05-03 14:27:56', 'voyager.decisions.index', NULL),
(109, 1, 'Azlegalacts', '', '_self', 'voyager-folder', NULL, NULL, 52, '2022-05-04 01:24:43', '2022-05-04 01:24:43', 'voyager.azlegalacts.index', NULL),
(110, 1, 'Legalacts', '', '_self', 'voyager-dot-3', NULL, NULL, 53, '2022-05-04 01:36:32', '2022-05-04 01:36:32', 'voyager.legalacts.index', NULL),
(111, 1, 'Decisionpresidia', '', '_self', 'voyager-terminal', NULL, NULL, 54, '2022-05-04 02:14:32', '2022-05-04 02:14:32', 'voyager.decisionpresidia.index', NULL),
(112, 1, 'Galleries', '', '_self', 'voyager-photos', NULL, NULL, 55, '2022-05-04 03:07:33', '2022-05-04 03:07:33', 'voyager.galleries.index', NULL),
(113, 1, 'Videogalleries', '', '_self', 'voyager-credit-cards', NULL, NULL, 56, '2022-05-04 04:20:15', '2022-05-04 04:20:15', 'voyager.videogalleries.index', NULL),
(114, 1, 'Faqs', '', '_self', 'voyager-question', NULL, NULL, 57, '2022-05-04 04:49:19', '2022-05-04 04:49:19', 'voyager.faqs.index', NULL),
(115, 1, 'Educationmaterials', '', '_self', 'voyager-resize-small', NULL, NULL, 58, '2022-05-04 06:11:40', '2022-05-04 06:11:40', 'voyager.educationmaterials.index', NULL),
(116, 1, 'Internationaldocuments', '', '_self', NULL, NULL, NULL, 59, '2022-05-04 07:13:43', '2022-05-04 07:13:43', 'voyager.internationaldocuments.index', NULL),
(117, 1, 'Measures', '', '_self', 'voyager-edit', NULL, NULL, 60, '2022-05-04 08:30:05', '2022-05-04 08:30:05', 'voyager.measures.index', NULL),
(118, 1, 'Singlenews', '', '_self', 'voyager-crop', NULL, NULL, 61, '2022-05-04 09:01:49', '2022-05-04 09:01:49', 'voyager.singlenews.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2022_04_28_111627_create_languages_table', 2),
(26, '2022_04_28_122645_create_news_table', 3),
(27, '2022_04_28_130436_create_home_pages_table', 4),
(28, '2022_04_28_133339_create_slider_news_table', 4),
(29, '2022_04_28_134554_create_contacts_table', 5),
(30, '2022_04_29_054014_create_forcitizens_table', 6),
(31, '2022_04_29_054627_create_forcitizens_table', 7),
(32, '2022_04_29_055933_create_forpersons_table', 8),
(33, '2022_04_29_061618_create_services_table', 9),
(34, '2022_04_29_070805_create_nmrcourts_table', 10),
(35, '2022_04_29_083026_create_langs_table', 11),
(36, '2022_04_29_084147_create_usefullinks_table', 12),
(37, '2022_04_29_100158_create_footersocials_table', 13),
(38, '2022_04_29_122545_create_abouts_table', 14),
(39, '2022_04_29_124856_create_pages_table', 15),
(40, '2022_04_29_132105_create_colleges_table', 15),
(41, '2022_04_30_083758_create_structures_table', 16),
(42, '2022_04_30_121843_create_apparatuses_table', 17),
(43, '2022_04_30_172307_create_court90s_table', 18),
(44, '2022_05_03_115726_create_court90s_table', 19),
(45, '2022_05_03_121412_create_supremecourts_table', 20),
(46, '2022_05_03_143647_create_categories_table', 21),
(47, '2022_05_03_151207_categories', 22),
(48, '2022_05_03_154334_create_azlegalacts_table', 22),
(49, '2022_05_03_170735_create_decisions_table', 23),
(50, '2022_05_03_172855_create_decisions_table', 24),
(51, '2022_05_03_175655_create_decisions_table', 25),
(52, '2022_05_03_180406_create_decisions_table', 26),
(53, '2022_05_03_182419_create_decisions_table', 27),
(54, '2022_05_03_183531_create_rhdecisions_table', 28),
(55, '2022_05_04_052202_create_azlegalacts_table', 29),
(56, '2022_05_04_053302_create_legalacts_table', 30),
(57, '2022_05_04_060253_create_decisionpresidia_table', 31),
(58, '2022_05_04_070137_create_galleries_table', 32),
(59, '2022_05_04_072328_create_photogalleries_table', 33),
(60, '2022_05_04_081553_create_videogalleries_table', 34),
(61, '2022_05_04_084152_create_faqs_table', 35),
(62, '2022_05_04_092521_create_faqs_table', 36),
(63, '2022_05_04_100433_create_educationmaterials_table', 37),
(64, '2022_05_04_104041_create_supremecourts_table', 38),
(65, '2022_05_04_110850_create_internationaldocuments_table', 39),
(66, '2022_05_04_121804_create_measures_table', 40),
(67, '2022_05_04_124118_create_news_table', 41),
(68, '2022_05_04_125813_create_singlenews_table', 42);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'news\\May2022\\mGWsTUc6NwxaEHT0RMTV.jpeg', 'Xeber1', 'xeber1', '<p>njksbdsbd</p>', '2022-05-04 08:45:32', '2022-05-04 08:45:32'),
(2, 'news\\May2022\\wT21DaZZS5nV3H6FIfd0.png', 'bshjasj', 'bshjasj', '<p>shashjgajs</p>', '2022-05-04 12:26:44', '2022-05-04 12:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `nmrcourts`
--

CREATE TABLE `nmrcourts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nmrcourts`
--

INSERT INTO `nmrcourts` (`id`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Naxçıvan MR Ağır Cinayətlər Məhkəməsi', 'https://courts.gov.az/az/nakhchivangravecrimes', 1, '2022-04-29 03:17:03', '2022-04-29 03:17:03'),
(2, 'Şərur Rayon Məhkəməsi', 'https://courts.gov.az/az/sharur', 1, '2022-04-29 03:17:00', '2022-04-29 03:41:19'),
(3, 'Naxçıvan MR Hərbi Məhkəməsi', 'https://courts.gov.az/az/nakhchivanmilitary', 1, '2022-04-29 03:18:00', '2022-04-29 03:41:59'),
(4, 'Ordubad Rayon Məhkəməsi', 'https://courts.gov.az/az/ordubad', 1, '2022-04-29 03:19:00', '2022-04-29 03:42:43'),
(5, 'Naxçıvan MR İnzibati Məhkəməsi', 'https://courts.gov.az/az/nmradministrative', 1, '2022-04-29 03:20:00', '2022-04-29 03:43:22'),
(6, 'Şahbuz Rayon Məhkəməsi', 'https://courts.gov.az/az/shakhbuz', 1, '2022-04-29 03:20:00', '2022-04-29 03:44:02'),
(7, 'Naxçıvan MR Kommersiya Məhkəməsi', 'https://courts.gov.az/az/nmrcommercial', 1, '2022-04-29 03:29:00', '2022-04-29 03:44:40'),
(8, 'Culfa Rayon Məhkəməsi', 'https://courts.gov.az/az/julfa', 1, '2022-04-29 03:29:00', '2022-04-29 03:45:13'),
(9, 'Naxçıvan Şəhər Məhkəməsi', 'https://courts.gov.az/az/nakhchivan', 1, '2022-04-29 03:45:00', '2022-04-29 03:46:02'),
(10, 'Kəngərli Rayon Məhkəməsi', 'https://courts.gov.az/az/kangarli', 1, '2022-04-29 03:46:30', '2022-04-29 03:46:30'),
(11, 'Babək Rayon Məhkəməsi', 'https://courts.gov.az/az/babek', 1, '2022-04-29 03:46:55', '2022-04-29 03:46:55'),
(12, 'Sədərək Rayon Məhkəməsi', 'https://courts.gov.az/az/sadarak', 1, '2022-04-29 03:47:23', '2022-04-29 03:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(2, 'browse_bread', NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(3, 'browse_database', NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(4, 'browse_media', NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(5, 'browse_compass', NULL, '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(6, 'browse_menus', 'menus', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(7, 'read_menus', 'menus', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(8, 'edit_menus', 'menus', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(9, 'add_menus', 'menus', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(10, 'delete_menus', 'menus', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(11, 'browse_roles', 'roles', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(12, 'read_roles', 'roles', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(13, 'edit_roles', 'roles', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(14, 'add_roles', 'roles', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(15, 'delete_roles', 'roles', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(16, 'browse_users', 'users', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(17, 'read_users', 'users', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(18, 'edit_users', 'users', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(19, 'add_users', 'users', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(20, 'delete_users', 'users', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(21, 'browse_settings', 'settings', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(22, 'read_settings', 'settings', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(23, 'edit_settings', 'settings', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(24, 'add_settings', 'settings', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(25, 'delete_settings', 'settings', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(26, 'browse_languages', 'languages', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(27, 'read_languages', 'languages', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(28, 'edit_languages', 'languages', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(29, 'add_languages', 'languages', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(30, 'delete_languages', 'languages', '2022-04-28 08:04:31', '2022-04-28 08:04:31'),
(31, 'browse_news', 'news', '2022-04-28 08:40:21', '2022-04-28 08:40:21'),
(32, 'read_news', 'news', '2022-04-28 08:40:21', '2022-04-28 08:40:21'),
(33, 'edit_news', 'news', '2022-04-28 08:40:21', '2022-04-28 08:40:21'),
(34, 'add_news', 'news', '2022-04-28 08:40:21', '2022-04-28 08:40:21'),
(35, 'delete_news', 'news', '2022-04-28 08:40:21', '2022-04-28 08:40:21'),
(46, 'browse_forpersons', 'forpersons', '2022-04-29 02:03:24', '2022-04-29 02:03:24'),
(47, 'read_forpersons', 'forpersons', '2022-04-29 02:03:24', '2022-04-29 02:03:24'),
(48, 'edit_forpersons', 'forpersons', '2022-04-29 02:03:24', '2022-04-29 02:03:24'),
(49, 'add_forpersons', 'forpersons', '2022-04-29 02:03:24', '2022-04-29 02:03:24'),
(50, 'delete_forpersons', 'forpersons', '2022-04-29 02:03:24', '2022-04-29 02:03:24'),
(51, 'browse_services', 'services', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(52, 'read_services', 'services', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(53, 'edit_services', 'services', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(54, 'add_services', 'services', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(55, 'delete_services', 'services', '2022-04-29 02:22:54', '2022-04-29 02:22:54'),
(56, 'browse_nmrcourts', 'nmrcourts', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(57, 'read_nmrcourts', 'nmrcourts', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(58, 'edit_nmrcourts', 'nmrcourts', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(59, 'add_nmrcourts', 'nmrcourts', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(60, 'delete_nmrcourts', 'nmrcourts', '2022-04-29 03:16:30', '2022-04-29 03:16:30'),
(61, 'browse_langs', 'langs', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(62, 'read_langs', 'langs', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(63, 'edit_langs', 'langs', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(64, 'add_langs', 'langs', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(65, 'delete_langs', 'langs', '2022-04-29 04:33:42', '2022-04-29 04:33:42'),
(66, 'browse_usefullinks', 'usefullinks', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(67, 'read_usefullinks', 'usefullinks', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(68, 'edit_usefullinks', 'usefullinks', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(69, 'add_usefullinks', 'usefullinks', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(70, 'delete_usefullinks', 'usefullinks', '2022-04-29 04:45:16', '2022-04-29 04:45:16'),
(71, 'browse_footersocials', 'footersocials', '2022-04-29 06:04:39', '2022-04-29 06:04:39'),
(72, 'read_footersocials', 'footersocials', '2022-04-29 06:04:39', '2022-04-29 06:04:39'),
(73, 'edit_footersocials', 'footersocials', '2022-04-29 06:04:39', '2022-04-29 06:04:39'),
(74, 'add_footersocials', 'footersocials', '2022-04-29 06:04:39', '2022-04-29 06:04:39'),
(75, 'delete_footersocials', 'footersocials', '2022-04-29 06:04:39', '2022-04-29 06:04:39'),
(76, 'browse_abouts', 'abouts', '2022-04-29 08:31:21', '2022-04-29 08:31:21'),
(77, 'read_abouts', 'abouts', '2022-04-29 08:31:21', '2022-04-29 08:31:21'),
(78, 'edit_abouts', 'abouts', '2022-04-29 08:31:21', '2022-04-29 08:31:21'),
(79, 'add_abouts', 'abouts', '2022-04-29 08:31:21', '2022-04-29 08:31:21'),
(80, 'delete_abouts', 'abouts', '2022-04-29 08:31:21', '2022-04-29 08:31:21'),
(81, 'browse_colleges', 'colleges', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(82, 'read_colleges', 'colleges', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(83, 'edit_colleges', 'colleges', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(84, 'add_colleges', 'colleges', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(85, 'delete_colleges', 'colleges', '2022-04-29 09:32:27', '2022-04-29 09:32:27'),
(86, 'browse_structures', 'structures', '2022-04-30 04:47:39', '2022-04-30 04:47:39'),
(87, 'read_structures', 'structures', '2022-04-30 04:47:39', '2022-04-30 04:47:39'),
(88, 'edit_structures', 'structures', '2022-04-30 04:47:39', '2022-04-30 04:47:39'),
(89, 'add_structures', 'structures', '2022-04-30 04:47:39', '2022-04-30 04:47:39'),
(90, 'delete_structures', 'structures', '2022-04-30 04:47:39', '2022-04-30 04:47:39'),
(91, 'browse_apparatuses', 'apparatuses', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(92, 'read_apparatuses', 'apparatuses', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(93, 'edit_apparatuses', 'apparatuses', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(94, 'add_apparatuses', 'apparatuses', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(95, 'delete_apparatuses', 'apparatuses', '2022-04-30 08:32:14', '2022-04-30 08:32:14'),
(96, 'browse_court90s', 'court90s', '2022-04-30 14:41:30', '2022-04-30 14:41:30'),
(97, 'read_court90s', 'court90s', '2022-04-30 14:41:30', '2022-04-30 14:41:30'),
(98, 'edit_court90s', 'court90s', '2022-04-30 14:41:30', '2022-04-30 14:41:30'),
(99, 'add_court90s', 'court90s', '2022-04-30 14:41:30', '2022-04-30 14:41:30'),
(100, 'delete_court90s', 'court90s', '2022-04-30 14:41:30', '2022-04-30 14:41:30'),
(101, 'browse_supremecourts', 'supremecourts', '2022-05-03 08:20:06', '2022-05-03 08:20:06'),
(102, 'read_supremecourts', 'supremecourts', '2022-05-03 08:20:06', '2022-05-03 08:20:06'),
(103, 'edit_supremecourts', 'supremecourts', '2022-05-03 08:20:06', '2022-05-03 08:20:06'),
(104, 'add_supremecourts', 'supremecourts', '2022-05-03 08:20:06', '2022-05-03 08:20:06'),
(105, 'delete_supremecourts', 'supremecourts', '2022-05-03 08:20:06', '2022-05-03 08:20:06'),
(106, 'browse_categories', 'categories', '2022-05-03 10:52:50', '2022-05-03 10:52:50'),
(107, 'read_categories', 'categories', '2022-05-03 10:52:50', '2022-05-03 10:52:50'),
(108, 'edit_categories', 'categories', '2022-05-03 10:52:50', '2022-05-03 10:52:50'),
(109, 'add_categories', 'categories', '2022-05-03 10:52:50', '2022-05-03 10:52:50'),
(110, 'delete_categories', 'categories', '2022-05-03 10:52:50', '2022-05-03 10:52:50'),
(126, 'browse_decisions', 'decisions', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(127, 'read_decisions', 'decisions', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(128, 'edit_decisions', 'decisions', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(129, 'add_decisions', 'decisions', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(130, 'delete_decisions', 'decisions', '2022-05-03 14:27:56', '2022-05-03 14:27:56'),
(136, 'browse_azlegalacts', 'azlegalacts', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(137, 'read_azlegalacts', 'azlegalacts', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(138, 'edit_azlegalacts', 'azlegalacts', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(139, 'add_azlegalacts', 'azlegalacts', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(140, 'delete_azlegalacts', 'azlegalacts', '2022-05-04 01:24:43', '2022-05-04 01:24:43'),
(141, 'browse_legalacts', 'legalacts', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(142, 'read_legalacts', 'legalacts', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(143, 'edit_legalacts', 'legalacts', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(144, 'add_legalacts', 'legalacts', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(145, 'delete_legalacts', 'legalacts', '2022-05-04 01:36:32', '2022-05-04 01:36:32'),
(146, 'browse_decisionpresidia', 'decisionpresidia', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(147, 'read_decisionpresidia', 'decisionpresidia', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(148, 'edit_decisionpresidia', 'decisionpresidia', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(149, 'add_decisionpresidia', 'decisionpresidia', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(150, 'delete_decisionpresidia', 'decisionpresidia', '2022-05-04 02:14:32', '2022-05-04 02:14:32'),
(151, 'browse_galleries', 'galleries', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(152, 'read_galleries', 'galleries', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(153, 'edit_galleries', 'galleries', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(154, 'add_galleries', 'galleries', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(155, 'delete_galleries', 'galleries', '2022-05-04 03:07:33', '2022-05-04 03:07:33'),
(156, 'browse_videogalleries', 'videogalleries', '2022-05-04 04:20:15', '2022-05-04 04:20:15'),
(157, 'read_videogalleries', 'videogalleries', '2022-05-04 04:20:15', '2022-05-04 04:20:15'),
(158, 'edit_videogalleries', 'videogalleries', '2022-05-04 04:20:15', '2022-05-04 04:20:15'),
(159, 'add_videogalleries', 'videogalleries', '2022-05-04 04:20:15', '2022-05-04 04:20:15'),
(160, 'delete_videogalleries', 'videogalleries', '2022-05-04 04:20:15', '2022-05-04 04:20:15'),
(161, 'browse_faqs', 'faqs', '2022-05-04 04:49:19', '2022-05-04 04:49:19'),
(162, 'read_faqs', 'faqs', '2022-05-04 04:49:19', '2022-05-04 04:49:19'),
(163, 'edit_faqs', 'faqs', '2022-05-04 04:49:19', '2022-05-04 04:49:19'),
(164, 'add_faqs', 'faqs', '2022-05-04 04:49:19', '2022-05-04 04:49:19'),
(165, 'delete_faqs', 'faqs', '2022-05-04 04:49:19', '2022-05-04 04:49:19'),
(166, 'browse_educationmaterials', 'educationmaterials', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(167, 'read_educationmaterials', 'educationmaterials', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(168, 'edit_educationmaterials', 'educationmaterials', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(169, 'add_educationmaterials', 'educationmaterials', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(170, 'delete_educationmaterials', 'educationmaterials', '2022-05-04 06:11:40', '2022-05-04 06:11:40'),
(171, 'browse_internationaldocuments', 'internationaldocuments', '2022-05-04 07:13:42', '2022-05-04 07:13:42'),
(172, 'read_internationaldocuments', 'internationaldocuments', '2022-05-04 07:13:42', '2022-05-04 07:13:42'),
(173, 'edit_internationaldocuments', 'internationaldocuments', '2022-05-04 07:13:42', '2022-05-04 07:13:42'),
(174, 'add_internationaldocuments', 'internationaldocuments', '2022-05-04 07:13:42', '2022-05-04 07:13:42'),
(175, 'delete_internationaldocuments', 'internationaldocuments', '2022-05-04 07:13:43', '2022-05-04 07:13:43'),
(176, 'browse_measures', 'measures', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(177, 'read_measures', 'measures', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(178, 'edit_measures', 'measures', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(179, 'add_measures', 'measures', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(180, 'delete_measures', 'measures', '2022-05-04 08:30:05', '2022-05-04 08:30:05'),
(181, 'browse_singlenews', 'singlenews', '2022-05-04 09:01:49', '2022-05-04 09:01:49'),
(182, 'read_singlenews', 'singlenews', '2022-05-04 09:01:49', '2022-05-04 09:01:49'),
(183, 'edit_singlenews', 'singlenews', '2022-05-04 09:01:49', '2022-05-04 09:01:49'),
(184, 'add_singlenews', 'singlenews', '2022-05-04 09:01:49', '2022-05-04 09:01:49'),
(185, 'delete_singlenews', 'singlenews', '2022-05-04 09:01:49', '2022-05-04 09:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photogalleries`
--

CREATE TABLE `photogalleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-04-27 14:17:11', '2022-04-27 14:17:11'),
(2, 'user', 'Normal User', '2022-04-27 14:17:11', '2022-04-27 14:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `title`, `link`, `icon`) VALUES
(1, '2022-04-29 02:24:03', '2022-04-29 02:24:03', 'Dövlət Rüsumunun hesablanması kalkulyatoru', 'https://e-mehkeme.gov.az/Calculator', 'fa-calculator'),
(2, '2022-04-29 02:30:44', '2022-04-29 02:30:44', 'Sənədlərin nümunələri', '\\example_documents', 'fa-file'),
(3, '2022-04-29 02:31:36', '2022-04-29 02:31:36', 'Nəşrlərimiz', '/publications', 'fa-print'),
(4, '2022-04-29 02:32:42', '2022-04-29 02:32:42', 'Elektron kitabxana', '/electron_library', 'fa-lines-leaning');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Naxçıvan Muxtar Respublikası Ali Məhkəməsi', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Puste', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Admin', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(14, 'site.keywords', 'Site Keywords', 'Naxcivan Ali Mehkeme', NULL, 'text', 7, 'Site'),
(15, 'site.favicon', 'Site favicon', 'settings\\April2022\\ZADqrpHya8PKIAiSauNW.png', NULL, 'image', 8, 'Site'),
(16, 'site.footer', 'site footer', 'Tərtibat Və Proqramlaşdırma Naxçıvan Muxtar Respublikası Rabitə Və Yeni Texnologiyalar Nazirliyi', NULL, 'text_area', 9, 'Site'),
(17, 'site.address', 'site address', 'Ünvan: Naxçıvan şəhəri, AZ 7000, Atatürk küçəsi 19', NULL, 'text_area', 10, 'Site'),
(18, 'site.phone', 'site phone', 'Telefon: (036) 544-61-77', NULL, 'text', 11, 'Site'),
(19, 'site.email', 'site email', 'E-mail: alimehkeme@nakhchivan.az', NULL, 'text', 12, 'Site'),
(20, 'site.fax', 'site fax', 'Fax: (036) 550-12-77', NULL, 'text_area', 13, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'structures\\April2022\\Pd6fY093QdEznrOn8bUh.png', '2022-04-30 08:11:11', '2022-04-30 08:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `supremecourts`
--

CREATE TABLE `supremecourts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supremecourts`
--

INSERT INTO `supremecourts` (`id`, `title`, `slug`, `link`, `content`, `created_at`, `updated_at`) VALUES
(1, 'NAXÇIVAN MUXTAR RESPUBLİKASI ALİ MƏCLİSİNİN FƏXRİ FƏRMANI', 'naxcivan-muxtar-respubli-kasi-ali-m-cli-si-ni-n-f-xri-f-rmani', 'NAXÇIVAN MUXTAR RESPUBLİKASI ALİ MƏCLİSİNİN FƏXRİ FƏRMANI', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://127.0.0.1:8000/storage/supremecourts/May2022/gerb.png\" alt=\"\" width=\"178\" height=\"196\" /></p>\r\n<div class=\"decree-info\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: #333333; font-family: \'Times New Roman\', serif; text-align: center;\">\r\n<h1 class=\"decree-title\" style=\"box-sizing: border-box; font-size: 30px; margin: 30px 0px; line-height: 1.1; font-family: inherit; color: #548dd4; padding: 0px;\">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />ALİ MƏCLİSİNİN</h1>\r\n<h1 class=\"decree-titles\" style=\"box-sizing: border-box; font-size: 36px; margin: 30px 0px; font-weight: 500; line-height: 1.1; font-family: inherit; color: #ff0000; padding: 0px;\">FƏXRİ FƏRMANI<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />№ 48</h1>\r\n<p class=\"decree-black\" style=\"box-sizing: border-box; margin: 30px 0px; padding: 0px; font-size: 20px; font-style: italic;\">Nax&ccedil;ıvan Muxtar Respublikasının<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />Ali Məhkəməsi səmərəli<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />fəaliyyətinə g&ouml;rə</p>\r\n<p class=\"decree-blue\" style=\"box-sizing: border-box; margin: 30px 0px; padding: 0px; color: #548dd4; font-size: 22px;\">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />ALİ MƏCLİSİNİN<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />FƏXRİ FƏRMANI İLƏ TƏLTİF EDİLMİŞDİR</p>\r\n<p class=\"decree-endblack\" style=\"box-sizing: border-box; margin: 0px 50px 10px 0px; padding: 0px; font-size: 20px; text-align: right;\">NAX&Ccedil;IVAN MUXTAR RESPUBLİKASI<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />ALİ MƏCLİSİNİN SƏDRİ: VASİF TALIBOV</p>\r\n<p class=\"decree-endblack end\" style=\"box-sizing: border-box; margin: 0px 50px 10px 0px; padding: 0px; text-align: right;\">02 oktyabr 2015-ci il</p>\r\n</div>', '2022-05-04 06:46:00', '2022-05-04 12:07:40'),
(2, 'Naxçıvan Muxtar Respublikası Ali Məclisi Sədrinin Sərəncamı', 'naxcivan-muxtar-respublikasi-ali-m-clisi-s-drinin-s-r-ncami', '\\', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-indent: 1cm;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-indent: 1cm;\"><span style=\"box-sizing: border-box; font-size: 16pt; line-height: 24.5333px; font-family: \'Times New Roman\', serif;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi iş&ccedil;ilərinin təltif edilməsi haqqında Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin Sərəncamı</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-indent: 1cm;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">&nbsp;Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının 5-ci maddəsinin II hissəsinin 21-ci bəndini rəhbər tutaraq&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\">qərara&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;alıram:</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">Nax&ccedil;ıvan Muxtar Respublikasında məhkəmə hakimiyyəti orqanlarında və d&ouml;vlət qulluğunda səmərəli fəaliyyətlərinə g&ouml;rə:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">Quliyev V&uuml;qar Kərim oğluna</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">Mirzəyev İlqar Məhərrəm oğluna &ndash;&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\">&ldquo;Əməkdar h&uuml;quqş&uuml;nas&rdquo;</span>&nbsp;fəxri adı;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">Vəliyev Yunis Əziz oğluna &ndash;&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\">&ldquo;Əməkdar d&ouml;vlət qulluq&ccedil;usu&rdquo;&nbsp;</span>fəxri adı;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: justify; text-indent: 1cm; line-height: 20.4px;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 24px; font-family: \'Times New Roman\', serif;\">Seyidova Xasa Seyidəli qızına &ndash;&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\">&ldquo;Rəşadətli əməyə g&ouml;rə&rdquo;</span>&nbsp;nişanı verilsin.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;\">Vasif TALIBOV</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin Sədri</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 15.6px; text-align: right;\"><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 13pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;\">Nax&ccedil;ıvan şəhəri, 2 oktyabr 2015-ci il</span></em></p>', '2022-05-04 06:47:00', '2022-05-04 12:08:07'),
(3, 'Naxçıvan Muxtar Respublikası Ali Məhkəməsi - 90', 'naxcivan-muxtar-respublikasi-ali-m-hk-m-si-90', '\\', '<h2 style=\"box-sizing: border-box; margin: 0cm 0px 8px; font-weight: normal; line-height: 1.4; font-size: 20.4px; font-family: Arial, sans-serif; color: #000000; text-align: center; padding: 20px 0px 8px; text-rendering: optimizelegibility; outline: none !important;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><span style=\"box-sizing: border-box; font-size: 18pt; outline: none !important;\"><em style=\"box-sizing: border-box; outline: none !important;\"><span style=\"box-sizing: border-box; font-family: \'Times New Roman\', serif; outline: none !important;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi &ndash;&nbsp; 90</span></em></span></span></span></h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; break-after: avoid;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi uzun və şərəfli bir tarixi inkişaf yolu ke&ccedil;mişdir. Bu yol Nax&ccedil;ıvan Muxtar Respubli&shy;ka&shy;sının, b&uuml;t&ouml;vl&uuml;kdə isə Azərbaycanın h&uuml;quq tarixi ilə bağlı olub &ouml;lkəmizin və muxtar respublikamızın ke&ccedil;diyi &ccedil;ox m&uuml;rəkkəb və əlamətdar tarixi hadisələrlə zəngin bir d&ouml;vr&uuml;n&uuml; &ouml;z&uuml;ndə təcəss&uuml;m etdirir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Tarixi mənbələrə əsasən demək olar ki, Nax&ccedil;ıvan MSSR-də Azərbaycan SSR Ali Məhkəməsinin b&ouml;lməsi Azərbaycan SSR Mərkəzi &nbsp;İcraiyyə Komitəsi Rəyasət Heyətinin 3 oktyabr 1925-ci il tarixli qanunu ilə&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">yaradılmışdır. Bu məhkəmənin təsis edil&shy;məsi və səlahiyyətinə daxil olan məsələlərin dairəsi onu Nax&ccedil;ıvan Muxtar Respublikası &nbsp;Ali Məhkəməsinin &ldquo;sələfi&rdquo; kimi qiymətləndir&shy;məyə və beləliklə, Ali Məhkəmənin yaranma tarixi olaraq məhz 1925-ci il 3 oktyabr tarixini qəbul etməyə əsas verir.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">1934-c&uuml; ildən Nax&ccedil;ıvan MSSR Baş Məhkəməsi, 1937-ci ildən isə Nax&ccedil;ıvan MSSR Ali Məhkəməsi adlandırılan bu məhkəmə sonrakı d&ouml;vrlərdə ciddi struktur dəyişikliyinə uğramamış və ona aid edilmiş işlərə birinci və yuxarı instansiya&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">məhkəməsi qismində baxmaq, habelə fəaliyyəti dairəsində olan məhkəmələr &uuml;zərində məhkəmə nəzarətini həyata ke&ccedil;irmək funksi&shy;ya&shy;la&shy;&shy;rına malik olmuşdur.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">1977-ci ildə SSRİ-nin yeni Konstitusiyasının qəbul edilməsi ilə bağlı Azərbaycan SSR-in məhkəmə orqanları sisteminin statusunu tənzimləyən qanunvericiliyin də dəyişdirilməsi zərurəti yaranmış, nəticədə 1981-ci ilin iyun ayının 16-da &ldquo;Azərbaycan &nbsp;SSR-də məhkəmə quruluşu haqqında&rdquo; yeni Qanun qəbul olunmuşdur. Həmin qanunda Nax&ccedil;ıvan MSSR Ali Məhkəməsinin səlahiyyətləri daha da genişləndirilmişdir. 26 iyun 1990-cı il tarixdə &ldquo;Azərbaycan SSR-də məhkəmə quruluşu haqqında&rdquo; Qanun qəbul edilmiş və bu Qanunla 1981-ci il tarixli qanunda təsbit edilən qaydalar daha da təkmilləşdirilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">1990-cı ilin əvvəllərindən başlayaraq&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">SSRİ-də, o c&uuml;m&shy;lədən</span>&nbsp;Azərbaycan&shy;da cərəyan edən hadisələr, ən başlıcası 18 oktyabr 1991-ci ildə Azər&shy;baycan Respublikasının d&ouml;vlət m&uuml;stəqilliyini əldə etməsi məhkəmə quru&shy;luşunun, ədalət m&uuml;hakiməsi qaydalarının k&ouml;kl&uuml; şəkildə&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">dəyişdirilməsi və məhkəmələrin m&uuml;stəqilliyinin təmin edilməsi zərurətini ortaya &ccedil;ıxarmış, lakin həmin d&ouml;vrdə digər sahələrdə olduğu kimi məhkəmə orqanları sistemin&shy;də də aparılan dəyişikliklər</span></span><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">yetərli olmamışdır.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Yalnız 1993-c&uuml; ildə Ulu &ouml;ndər Heydər Əliyevin hakimiyyətə qayıdışı ilə b&uuml;t&uuml;n sahələrdə olduğu kimi məh&shy;kəmə hakimiyyəti sahəsində də k&ouml;kl&uuml; islahatların b&uuml;n&ouml;vrəsi qoyulmuşdur. Demokratik d&ouml;vlət quruculuğunun əsas hədəflərini m&uuml;əyyən edən Ulu &ouml;ndər demişdir:&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">&ldquo;Biz h&uuml;quqi d&ouml;vləti, demokratik d&ouml;vləti yaradırıq. Bunun da ən prinsipial bir hissəsi məhkəmə sistemində islahatların&nbsp; ke&ccedil;irilməsi, onun beynəlxalq h&uuml;quq normalarına uyğunlaşdırılmasıdır&rdquo;</em></span>. Məhz Azərbaycan xalqının &uuml;mummilli lideri Heydər Əliyevin bilavasitə təşəbb&uuml;s&uuml; və&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">rəhbərliyi ilə hazırlanmış, 12 noyabr 1995-ci ildə&nbsp;</span>qəbul edilmiş m&uuml;stəqil Azərbaycan Respublikasının ilk milli Kons&shy;titusiyasında d&ouml;vlət hakimiyyəti qanunvericilik, icra və məhkəmə hakimiyyəti qollarına&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">ay&shy;rılmış, Azərbaycan &nbsp;Respub&shy;likasında məhkəmə hakimiyyətinin ədalət m&uuml;haki&shy;məsi</span>&nbsp;yolu ilə yalnız məhkəmələr tərəfindən həyata ke&ccedil;iril&shy;məsi m&uuml;əyyən olunmuşdur.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Azərbaycan Respublikasında ədalət m&uuml;hakiməsinin qabaqcıl təcr&uuml;bə əsasında həyata ke&ccedil;irilməsinin təmin edilməsi və məhkəmə sisteminin daha da təkmilləşdirilməsi məqsədi ilə 10 iyun 1997-ci ildə &ldquo;Məhkəmələr və hakimlər haqqında&rdquo; Azərbaycan Respublikasının Qanunu qəbul olunmuşdur. Həmin qanunun 10-cu fəsli Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin statusunun tənzimlənməsinə həsr olunmuşdur.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Konstitusiyasının qəbulundan &ouml;tən qısa m&uuml;ddət ərzində Nax&ccedil;ıvan Muxtar Respublikasının Konstitusiyası hazır&shy;lanaraq qəbul olunmuş, 8 yanvar 1999-cu il tarixdən q&uuml;vvəyə minmişdir. Nax&ccedil;ıvan Muxtar Respublikası Konstitusiyasının qəbulu muxtar respublikanın ictimai-siyasi həyatında m&uuml;h&uuml;m əlamətdar hadisəyə&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">&ccedil;evrilmiş, muxtar respublikada d&ouml;vlət idarəetməsinin təşkilinin m&uuml;kəmməl</span>&nbsp;h&uuml;quqi bazasını yaratmışdır. Bu konstitusiyanın məhkəmə hakimiyyətinə həsr olunmuş 4-c&uuml; fəslində Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi &uuml;mumi və ixtisaslaşdırılmış məhkəmələrin icraatına aid edilən m&uuml;lki, cinayət və digər işlər &uuml;zrə ali məhkəmə orqanı kimi təsis edilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin statusu ilə bağlı &ouml;z&uuml;nəməxsus x&uuml;susiyyətlərdən biri onun konstitusiya nəzarətini həyata ke&ccedil;irməsi ilə bağlıdır. Konstitusiyaya g&ouml;rə Ali Məhkəmə Nax&ccedil;ıvan Muxtar Respublikasının ərazisində apelyasiya qaydasında ədalət m&uuml;hakiməsini həyata ke&ccedil;irməklə yanaşı, konstitusiya nəzarətini də təmin edir. Belə ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi deputatlarının se&ccedil;kilərinin nəticələrinin d&uuml;zg&uuml;nl&uuml;y&uuml;n&uuml;n yoxlanılaraq təsdiq edilməsi, muxtar respublikanın qanunvericilik aktları arasında uyğunluq məsələlərinin həll edilməsi, məhkəmələr tərəfindən insan h&uuml;quq və azadlıqlarının həyata ke&ccedil;irilməsi ilə bağlı Nax&ccedil;ıvan Muxtar Respublikası qanunlarının şərh edilməsi haqqında m&uuml;raciətlərə baxılması Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin konstitusiya nəzarəti orqanı kimi səlahiyyətlərinə daxildir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">&Ouml;lkəmizdə m&ouml;vcud olan davamlı sosial-iqtisadi inkişaf tendensiyası, ictimai həyatın m&uuml;xtəlif sahələrini əhatə edən yeniliklər məhkəmə sisteminin də təkmilləşdirilməsi işini daim diqqət mərkəzində saxlayır.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Ulu &ouml;ndərin d&ouml;vlət&ccedil;ilik konspesiyasını uğurla davam etdirən Azərbaycan Respublikasının Prezidenti cənab&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">İlham Əliyev məhkəmələrin &ccedil;ıxardığı qərarların taley&uuml;kl&uuml; əhəmiyyətini vurğulayaraq demişdir:&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">&ldquo;Ədalət hər bir cəmiyyətin inkişafı &uuml;&ccedil;&uuml;n başlıca amillərdən biridir. Hər yerdə ədalət olmalıdır, ilk n&ouml;vbədə, məhkəmə sistemində. &Ccedil;&uuml;nki məhkəmələrdə qəbul edilmiş qərarlar insanların taleyinə təsir g&ouml;stərir&rdquo;</em></span>.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Hazırda&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">d&ouml;vlət baş&ccedil;ısı cənab&nbsp;</span>İlham Əliyevin&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">rəhbərliyi altında &ouml;lkəmizdə məhkəmə sisteminin inkişaf etdirilməsi və&nbsp;</span><span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">m&uuml;asirləşdirilməsi istiqamətində &ccedil;oxşaxəli islahatlar həyata ke&ccedil;irilməkdədir. Belə ki, Azərbaycan Respublika&shy;sı Prezidentinin məhkəmə hakimiyyətinin m&uuml;asirləşdirilməsinə həsr olunan 19 yanvar 2006-cı il tarixli fərmanı məhkə&shy;mə islahatlarının n&ouml;vbəti mərhələyə qədəm qoymasına b&ouml;y&uuml;k təkan vermiş&shy;dir. Bu mərhələdə vətəndaşların h&uuml;quq institutlarına olan tələbatının daha keyfiy&shy;yətlə təmin olunması &uuml;&ccedil;&uuml;n &ouml;lkəmizdə yeni apellyasiya məhkəmələri yara&shy;dılmışdır. Məhkəmə sisteminin təkmilləş&shy;diril&shy;&shy;məsi ilə bağlı Azərbaycan Respublikası Prezidentinin 2010-cu il 15 iyul və 9 avqust tarixli fərmanları ilə regionlarda Ağır Cinayətlər və İnzibati-İqtisadi məhkəmələr yaradılmış, &ouml;lkədə fəaliyyət g&ouml;stərən apellyasiya, ağır cinayətlər, inzibati-iqtisadi və hərbi məhkə&shy;mələrin ərazi yurisdiksiyası m&uuml;əyyənləşdirilmişdir.&nbsp;</span>Həyata ke&ccedil;irilən məhkəmə-h&uuml;quq islahat&shy;ları &ouml;lkəmizin&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">digər regionları ilə yanaşı, Nax&ccedil;ıvan Muxtar Respublikasında da fəaliyyət g&ouml;s&shy;tərən</span>&nbsp;məhkəmə orqanlarını əhatə etmişdir. Bu fərmanların qəbulundan sonra Nax&ccedil;ıvan Muxtar Res&shy;publika&shy;sının Ali Məhkəməsinin Ağır Cinayətlərə dair&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">işlər &uuml;zrə birinci instansiya kollegiyası ləğv olunaraq ağır və x&uuml;susilə ağır cinayətlərə baxmaq səlahiyyəti yeni yaradılmış Nax&ccedil;ıvan Muxtar Respubli&shy;kasının Ağır Cinayət&shy;lər Məhkəməsinə verilmişdir. Eyni zamanda Ali Məhkəmədə daha iki kollegiya-iqtisadi m&uuml;bahisələrə dair işlər &uuml;zrə və hərbi məhkəmələrin işləri &uuml;zrə kollegiyalar fəaliyyətə başlamış, muxtar respublikada fəaliyyət g&ouml;stərən b&uuml;t&uuml;n rayon (şəhər) və ixtisaslaşdırılmış məhkəmələrin h&ouml;km və qərarlarından apellyasiya şikayəti və protestlərinə baxılması&nbsp;</span><span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">səlahiyyəti Nax&ccedil;ıvan Muxtar Respubli&shy;kasının Ali Məhkəməsinə verilmişdir.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">Nax&ccedil;ıvan Muxtar Respublikasında fəaliyyət g&ouml;stərən məhkəmələrin fəaliyyətinin m&uuml;asir tələblər səviyyəsində təşkil olunmasında &ldquo;Nax&ccedil;ıvan Mux&shy;&shy;tar Respublikasında h&uuml;quq institutlarının inkişafı haqqında&rdquo; Azərbaycan Res&shy;publikası Prezidentinin 2 noyabr 2006-cı il tarixli Fərmanı son dərəcə m&uuml;h&uuml;m əhə&shy;miyyətə malikdir. Fərmanın qəbulundan sоnra &ouml;tən m&uuml;ddət ərzində&nbsp;</span><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">Naх&ccedil;ıvan Muхtar Rеspublikası&nbsp;</span><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">Ali Məclisi Sədrinin x&uuml;susi diqqət və qayğısı sayəsində&nbsp;</span><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">muхtar rеspublikanın h&uuml;quq institutlarının inkişaf еtdiril&shy;məsi, məhkəmə</span><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">haki&shy;miyyəti оrqanlarının fəaliyyətinin m&uuml;asir standartlar səviyyəsində qurulması,</span>&nbsp;оnların maddi-tехniki bazasının m&ouml;hkəmlən&shy;dirilməsi istiqamətində m&uuml;h&uuml;m işlər g&ouml;r&uuml;lm&uuml;şd&uuml;r.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">H&uuml;quq institutlarının inkişaf etdirilməsi və məhkəmə orqanlarının maddi-texniki</span><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;bazasının m&ouml;hkəmələndirilməsi istiqamətində muxtar respub&shy;likada fəaliyyət g&ouml;stərən məhkəmələr &uuml;&ccedil;&uuml;n m&uuml;asir tələblərə cavab vеrən in&shy;zibati binaların tikilməsi х&uuml;susi yеr tutur.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">M&uuml;qayisə &uuml;&ccedil;&uuml;n bir faktı qeyd edək ki, 1995-ci ilədək muxtar respublikada məhkəmə orqanlarının inzibati binaları nəinki istifadə &uuml;&ccedil;&uuml;n yararsız halda idi, bu binalar həmin d&ouml;vrlərdə hətta məhkəmələrin balansında belə deyildi. Hazırda isə muxtar respublikamızda fəaliyyət g&ouml;stərən b&uuml;t&uuml;n məhkəmə orqanları &uuml;&ccedil;&uuml;n qabaqcıl meyarları &ouml;z&uuml;ndə ehtiva edən, həm memarlıq, həm də daxili tərtibat və dizayn baxımından ədalət m&uuml;hakiməsinin &ouml;z&uuml;nəməxsus x&uuml;susiyyətlərini əks etdirən inzibati binalar inşa edilib istifadəyə verilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Bu məhkəmə binalarının a&ccedil;ılış məra&shy;simlər&shy;ində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin Sədri cənab Vasif Talıbоv iştirak etmiş, yaradılan şəraitdən daha səmərəli istifadə еdilməsi, h&uuml;quqi maarifləndirmə işlərinin genişləndirilməsi, qanunvericilik aktlarının daha dərindən mənimsənilməsi ilə bağlı hakimlərə və məhkəmə aparatı iş&ccedil;ilərinə m&uuml;h&uuml;m t&ouml;vsiyələr vеrmişdir. Ali Məclisin Sədri bildirmişdir ki,&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">&ldquo;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">vətəndaşlara h&uuml;quq və vəzifə&shy;lərinin izah edilməsi,</span>&nbsp;məhkəmə prosesində ədalətli qərarların qəbul edilməsi daim diqqət mərkəzində saxlanılmalıdır&rdquo;.</em></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">Məhkəmə hakimiyyətinə g&ouml;stərilən diqqət və qayğının digər bir təzah&uuml;r&uuml;</span><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;muxtar respublikada məhkəmə hakimiyyəti orqanlarının hakim korpusunun formalaşdı&shy;rıl&shy;masında m&uuml;şahidə olunmaqdadır. Belə ki, hakimlərin se&ccedil;ilməsinin Avropada ən m&uuml;tərəqqi və şəffaf qaydaları tətbiq edilərək m&uuml;asir standartlara cavab verən yeni kriteriyalar əsasında ke&ccedil;irilən se&ccedil;im turları nəticəsində y&uuml;ksək biliyə və mənəvi keyfiyyətlərə malik Nax&ccedil;ıvan D&ouml;vlət Universitetinin h&uuml;quq fak&uuml;ltəsinin məzunu olan 16 h&uuml;quqş&uuml;nas muxtar respublikada fəaliyyət g&ouml;stərən məhkəmələrə hakim vəzifələrinə təyin edilmişdir. Onu da qeyd edək ki, uğur qazanmış hakim&shy;liyə namizədlərin i&ccedil;ərisində Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəmə&shy;sinin aparatında işləmiş 6 h&uuml;quqş&uuml;nas m&uuml;xtəlif məhkəmə orqanla&shy;rında hakim vəzifələrinə təyin olunmuşdur.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Hazırda muxtar respublikada hakim korpusunun 50%-dən &ccedil;oxunu yeni qaydalarla se&ccedil;ilmiş gənc nəsil hakimlər təşkil edir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Azərbaycan Respublikasının Prezidenti cənab İlham Əliyev və Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin Sədri cənab Vasif Talıbov tərəfindən muxtar respublikada fəaliyyət g&ouml;stərən hakimlərə g&ouml;stərilən y&uuml;ksək etimadın nəticəsidir ki, peşəkarlıq və h&uuml;quqi hazırlıq n&uuml;mayiş etdirən 4 hakim Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinə, 5 hakim məhkəmə sədri vəzifəsinə irəli &ccedil;əkilmiş, habelə 1 hakim Məhkəmə H&uuml;quq Şurasının, 1 hakim isə Hakimlərin Se&ccedil;ki Komitəsinin &uuml;zv&uuml; se&ccedil;ilmişdir. Əvvəllər muxtar respublikamızın məhkəmə orqanlarında fəaliyyət g&ouml;stərmiş 3 hakim hazırda Azərbaycan Respublikasının Ali Məhkəməsində, 6 hakim isə &ouml;lkəmizin digər regionlarının m&uuml;xtəlif məhkəmə orqanlarında hakimlik fəaliyyətlərini davam etdirirlər.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">M&uuml;qayisə &uuml;&ccedil;&uuml;n onu da qeyd edək ki, əgər 1992-ci ildə Nax&ccedil;ıvan</span><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;Muxtar Respublikasının Ali Məhkəməsi sədr və m&uuml;avindən başqa, 3 hakim və 11 məhkəmə aparatı iş&ccedil;isindən ibarət olmuşdursa, hazırda ştat cədvəlinə uyğun olaraq hakimlərin sayı 5 dəfə artırılaraq 14 nəfər,&nbsp; məhkəmə aparatı iş&ccedil;ilərinin sayı isə 6 dəfə artırılaraq 71 nəfər olmuş,&nbsp; beynəlxalq təcr&uuml;bəyə uyğun olaraq hər bir hakim &uuml;&ccedil;&uuml;n k&ouml;mək&ccedil;i ştatı m&uuml;əyyən olunmuşdur.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Məhkəmə hakimiyyətinə g&ouml;stərilən diqqət və qayğının digər n&uuml;munəsi Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi hakimlərinin və məhkəmə iş&ccedil;ilərinin əməyinin y&uuml;ksək qiymətləndirilməsi ilə bağlıdır. Belə ki, &ouml;tən d&ouml;vr ərzində Azərbaycan Respublikası Prezidentinin sərəncamları, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin m&uuml;vafiq fərmanlarına uyğun&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">olaraq</span>&nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məh&shy;kəməsinin hakimləri və d&ouml;vlət qulluq&ccedil;uları fəxri adlar və medallarla təltif edilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">B&uuml;t&uuml;n bunlarla yanaşı, &ouml;tən illər ərzində Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisi Sədrinin təşəbb&uuml;s&uuml; ilə &ldquo;D&ouml;vlət qulluğu haqqında&rdquo; qanuna dəyişikliklər edilərək Nax&ccedil;ıvan Muxtar Respublikasının Ali Məh&shy;kəməsi 3-c&uuml; kateqoriya d&ouml;vlət orqanları sırasından 2-ci kateqoriya d&ouml;vlət orqanları sırasına qaldırılmışdır. Bu isə Ali Məhkəmədə &ccedil;alışan d&ouml;vlət qulluq&ccedil;ularının maddi təmi&shy;natının artması və onlara daha y&uuml;ksək ixtisas dərəcələrinin verilməsi ilə nəticə&shy;lənmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">G&ouml;r&uuml;lm&uuml;ş işlərin nəticəsidir ki, muxtar respublikamızda insan h&uuml;quq və azadlıqlarının daha səmərəli və keyfiyyətli şəkildə təmin olunmasına əlverişli şərait yaranmışdır. Təkcə bir fakta nəzər salmaq kifayətdir ki, &ouml;tən ilin birinci yarısı ilə m&uuml;qаyisədə 2015-ci ilin birinci yarısında muxtar respublikanın şəhər və rayon məhkəmələri tərə&shy;findən bахılmış m&uuml;lki&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">işlərin sayında 30% artım olmuşdur. Bu statistik g&ouml;stərici isə onu</span>&nbsp;deməyə əsas verir ki, əhalinin məhkəmə orqanlarına və ədalət m&uuml;hakiməsinin obyektiv şəkildə həyata ke&ccedil;irilməsinə inamı g&uuml;n ke&ccedil;dikcə daha da artmaqdadır.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Qeyd edək ki, Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi ədalət&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">m&uuml;hakiməsi ilə yanaşı, əhali arasında h&uuml;quqi maarifləndirmə işinin g&uuml;cləndi&shy;ril&shy;məsinə, hakimlərin, məhkəmə iş&ccedil;i&shy;lərinin</span>&nbsp;ixtisaslarının artırılmasına y&ouml;nələn tədbirlər də həyata ke&ccedil;irir. Bu məqsədlə Azərbaycan Respub&shy;lika&shy;sının Prezidenti cənab İlham Əliyevin adı &ccedil;əkilən fərmanlarını və Nax&ccedil;ı&shy;van Muxtar Respublikası Ali Məclisinin Sədri cənab Vasif Talıbovun məhkə&shy;mə orqanlarına &uuml;nvanladığı t&ouml;vsiyələrini fəaliyyətində rəhbər tutan Nax&ccedil;ı&shy;van Muxtar Respublikasının Ali Məhkəməsi 2006-cı ildən bu g&uuml;nədək muxtar respublikanın məhkəmə və h&uuml;quq-m&uuml;hafizə orqanları arasında ilk və yeganə h&uuml;quqi mətbu nəşr olan B&uuml;lletenini nəşr etdirir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Muxtar Respublikamızda məhkəmə hakimiyyəti orqanlarının fəaliyyə&shy;tində informasiya təminatının həyata ke&ccedil;irilməsinin təkmilləşdirilməsi, eləcə də məhkəmələrdə yeni informasiya-komunikasiya texnologiyalarının geniş tətbiqi istiqamətində də m&uuml;h&uuml;m işlər g&ouml;r&uuml;lm&uuml;şd&uuml;r. Belə ki, Nax&ccedil;ıvan Muxtar Respubli&shy;kası Ali Məclisinin Sədri tərəfindən imzalanan 15 iyul 2011-ci il tarixli &ldquo;Nax&shy;&ccedil;ıvan Muxtar Respublikasında d&ouml;vlət orqanlarının elektron xidmətlər g&ouml;s&shy;tərməsinin təşkili haqqında&rdquo; fərmandan irəli gələn vəzifələrin icrası ilə bağlı Ali Məhkə&shy;mədə hər il g&ouml;r&uuml;&shy;ləcək işlərə dair tədbirlər planı təsdiq edilərək icra olunur.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Əhalinin m&uuml;raciət etmək h&uuml;ququnun daha da asanlaşdırılması məqsə&shy;di&shy;lə elektron xidmətlər g&ouml;stərilməsi &uuml;&ccedil;&uuml;n Ali Məhkəmənin internet saytının &ldquo;M&uuml;raciətlər&rdquo; b&ouml;lməsindən istifadə etmək&shy;lə vətəndaşlar &ouml;z ərizə və şikayətlərini istənilən vaxt elektron formada g&ouml;ndərmək imkanına malikdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi &ldquo;Elektron məhkəmə&rdquo; informasiya sisteminin yaradılması haqqında&nbsp; Azərbaycan Respublikası Prezidentinin 13 fevral 2014-c&uuml; il tarixli Sərəncamından irəli gələn vəzifələrin icrası istiqamətində də m&uuml;əyyən işlər g&ouml;rm&uuml;şd&uuml;r. Ədalət m&uuml;hakiməsinin daha səmərəli və şəffaf şəkildə həyata ke&ccedil;irilməsi, aşkarlıq və operativliyin təmin edilməsi məqsədilə 2014-c&uuml; ildə məhkəməyə daxil olan işlərin hakimlər arasında bərabər b&ouml;lg&uuml;s&uuml;n&uuml; m&uuml;əyyən edən &ldquo;Məhkəmə idarəetmə sistemi&rdquo; proqram təminatı hazırlanaraq tətbiq olunmağa başlamışdır.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Bundan başqa, Ali Məhkəmənin Azərbaycan və ingilis dillərində fəaliyyət g&ouml;stərən rəsmi internet saytı 2015-ci ildə x&uuml;susi proqramlaşdırma dilində m&uuml;asir standartlar səviyyəsində yenidən hazırlanmış, istifadə&ccedil;ilərin rahatlığını təmin etmək &uuml;&ccedil;&uuml;n mobil cihazların tələblərinə uyğunlaş&shy;dırıl&shy;mış, saytda yayımlanan məlumatlardan istifadəni asanlaşdırmaq məqsədilə vahid axtarış sistemi qurulmuş, sayt Azərbaycan Respublikasının elektron məhkəmə sisteminin vahid portalına inteqrasiya edilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Bu il həm&ccedil;inin Azərbay&shy;can Respublikası H&ouml;kumətinin D&uuml;nya Bankı ilə birgə maliyyələşdirdiyi &ldquo;M&uuml;tərəqqi ədliyyə xidmətləri və m&uuml;asir&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">məhkəmə infrastrukturu&rdquo; layihəsi &ccedil;ər&ccedil;ivəsində həmin informasiya sisteminin</span>&nbsp;Nax&ccedil;ıvan Muxtar Respublika&shy;sı Ali Məclisi Sədrinin dəstəyi ilə&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">muxtar respublikada fəaliyyət g&ouml;stərən məhkəmələrdə tətbiqini təmin etmək</span><span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">&nbsp;&uuml;&ccedil;&uuml;n m&ouml;vcud məhkəmələrin inzibati binalarında m&uuml;vafiq</span>&nbsp;infrastrukturun qurul&shy;ması işinə başlanılmış, hazırda bu sahədə işlər davam etdirilmək&shy;dədir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin sədri demişdir:&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">&ldquo;M&uuml;stəqil &ouml;lkədə h&uuml;quqi islahatların, vətəndaş cəmiyyəti quruculuğunun həyata ke&ccedil;irilməsi, beynəlxalq &ouml;hdəliklərin yerinə yetirilməsi vacib şərtdir&rdquo;</em></span>. Bu t&ouml;vsiyyələri fəaliyyətində rəhbər tutan Ali Məhkəmə beynəlxalq qurumlar və d&ouml;vlət orqanları ilə əlaqələrini, onlarla təcr&uuml;bə m&uuml;badiləsi aparılması işini daimi diqqət mərkəzində saxlayır, hаkimlərin pеşə vərdişlərinin аrtırılmа&shy;sı, onların h&uuml;quqi biliklərinin daha da m&ouml;hkəmlən&shy;dirilməsi istiqamətində bir sıra tədbirlər yerinə yetirir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&Ouml;tən d&ouml;vr ərzində Nax&ccedil;ıvan Muxtar Respublikasının Ali Məclisi&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">Sədrinin x&uuml;susi diqqət və qayğısı sayəsində Nax&ccedil;ıvan Muxtar Respublikası</span>&nbsp;Ali Məhkəməsinin, ixtisaslaşdırılmış, rayon (şəhər) məhkəmələrinin hakimləri Amerika Birləşmiş Ştatları, Almaniya və T&uuml;rkiyənin ayrı-ayrı&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.1pt;\">məhkəmə orqanla&shy;rında ezamiyyətdə olmuş, təcr&uuml;bə m&uuml;badiləsi aparmışlar.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">2007-ci ildə Avropa Şurası Baş Katibinin &ouml;lkəmizdəki x&uuml;susi</span><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">&nbsp;n&uuml;mayəndəsi Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsində olmuşdur.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">2011-ci ildə Nax&ccedil;ıvan Muxtar Respublikasının hakimləri &uuml;&ccedil;&uuml;n &ldquo;Avropa İnsan H&uuml;quqları Konvensiyasının tətbiqinin aktual məsələləri&rdquo; m&ouml;vzusunda seminar ke&ccedil;irilmiş, Azərbaycan Respublikasının Avropa İnsan H&uuml;quqları Məhkəməsindəki hakimi Xanlar Hacıyev həmin seminarda iştirak edərək hakimləri maraqlandıran suallara aydınlıq gətirmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.1pt;\">2013-c&uuml; ildə Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi, Azərbaycan H&uuml;quqş&uuml;nasları Konfederasiyası, BMT-nin İnsan H&uuml;quqları &uuml;zrə Ali Ko&shy;missarlığı və Almaniya Fede&shy;ral Ədliyyə Nazirliyinin Beynəlxalq H&uuml;quq Əməkdaşlığı Fondunun təşkilat&ccedil;ılığı ilə Nax&ccedil;ıvan şəhərində Nax&ccedil;ıvan Muxtar Respublikasında aparılan məhkəmə-h&uuml;quq islahatlarına həsr olunmuş bey&shy;nəlxalq seminar ke&ccedil;irilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">2013 və 2015-ci illərdə isə Nax&ccedil;ıvan şəhərində Azərbaycan Respublikası Ali Məhkəməsi,</span><span style=\"box-sizing: border-box; font-size: 14pt;\">&nbsp;Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi və Almaniya Bey&shy;nəlxalq Əməkdaşlıq Cəmiyyətinin (GİZ) birgə təşkilat&ccedil;ılığı ilə Nax&ccedil;ıvan Muxtar Respublikasında fəaliyyət g&ouml;stərən məhkəmələ&shy;rin hakimləri &uuml;&ccedil;&uuml;n m&uuml;xtəlif h&uuml;quqi m&ouml;vzulara həsr olunmuş seminarlar ke&ccedil;irilmişdir.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Ke&ccedil;irilmiş seminarın nəticəsi olaraq Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinə &uuml;nvanlanmış minnətdarlıq məktublarında seminarların təşkili, ədliyyə sistemində inkişafın əldə olunması, muxtar respublikada&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">fəa&shy;liyyət g&ouml;stərən hakimlərin peşə&shy;karlıq səviyyəsi y&uuml;ksək qiymətləndirilmiş,</span>&nbsp;b&uuml;&shy;t&uuml;n bu nailiyyətlərin gərgin əməyin sayəsində əldə olunması x&uuml;susi olaraq vurğulanmışdır. Məktubda Nax&ccedil;ıvan Muxtar Respublikası ilə yaxından tanış olmaq, onun g&ouml;zəl mənzərələrindən və mehriban insanlarından xoş təəss&uuml;ratlar almaq imkanı &uuml;&ccedil;&uuml;n yaradılmış şəraitə və g&ouml;stərilmiş k&ouml;məyə g&ouml;rə muxtar respublika rəhbərliyinə dərin minnətdarlıq bildirilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Nax&ccedil;ıvan Muxtar Respublikasının Ali Məhkəməsi Nax&ccedil;ıvan D&ouml;vlət Universiteti ilə əlaqələrini də daimi diqqət mərkəzində saxlayır, h&uuml;quqş&uuml;naslıq ixtisasının tələbələrinin peşəkar h&uuml;quqş&uuml;nas kimi yetişməsində yaxından iştirak edir.&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">Belə ki, Nax&ccedil;ıvan Muxtar Respublikası Ali Məclisinin Sədri tərəfindən imzalanan 27 iyul 2015-ci il tarixli &ldquo;Ali və orta ixtisas təhsili m&uuml;əssisələrində ixtisasların m&uuml;vafiq təşkilatlara hamiliyə verilməsi haqqında&rdquo; Sərəncamın&shy;dan irəli gələn vəzifələrin icrası ilə bağlı Ali Məhkəmədə 2015-ci ildə g&ouml;r&uuml;ləcək işlərə dair tədbirlər planı təsdiq edilərək m&uuml;əyyən işlər g&ouml;r&uuml;lm&uuml;şd&uuml;r.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Qeyd edək ki, təkcə son beş ildə, yəni 2010-2015-ci illərdə Nax&ccedil;ıvan D&ouml;vlət Universitetinin h&uuml;quqş&uuml;naslıq ixtisasını bitirən 26 h&uuml;quqş&uuml;nas Ali Məhkəmənin aparatında, 55 h&uuml;quqş&uuml;nas isə muxtar respub&shy;li&shy;kanın ixtisaslaşdırılmış, şəhər və rayon məhkəmələrində m&uuml;vafiq inzibati vəzifələr &uuml;zrə işə qəbul edilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">&Ouml;tən d&ouml;vr ərzində&nbsp;<span style=\"box-sizing: border-box; letter-spacing: -0.2pt;\">Nax&ccedil;ıvan D&ouml;vlət Universitetində h&uuml;quq fak&uuml;ltəsinin tələbələrinin&nbsp;</span>Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin sədri ilə g&ouml;r&uuml;ş&uuml; təşkil edilmiş, tələbələri maraqlandıran suallar cavablandırılmışdır.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Bundan başqa, beynəlxalq və &ouml;lkə miqyaslı əlamət&shy;dar g&uuml;nlərdə Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin kolle&shy;giya sədrləri və hakimlərinin iştirakı ilə Nax&ccedil;ıvan D&ouml;vlət Univer&shy;sitetində h&uuml;quqş&uuml;naslıq ixtisası &uuml;zrə təhsil alan tələbələr &uuml;&ccedil;&uuml;n h&uuml;quqi tədbirlər və konfranslar ke&ccedil;irilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt;\">Ali Məhkəmənin nəşri olan B&uuml;lletenin &ouml;tən n&ouml;mrələrində h&uuml;quq elminə marağın daha da artırılması və h&uuml;quqi biliklərin m&ouml;hkəmləndirilməsi məqsədilə Nax&ccedil;ıvan D&ouml;vlət Universitetinin h&uuml;quqş&uuml;naslıq ixtisasında təhsil alan tələbələrin məqalələ&shy;rinə yer verilmişdir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Bununla yanaşı, hazırda Ali Məhkəmənin 2 hakimi və 3 d&ouml;vlət qulluq&ccedil;usu Nax&ccedil;ıvan D&ouml;vlət Universitetinin H&uuml;quq fənləri kafedrasında m&uuml;xtəlif h&uuml;quq sahələri &uuml;zrə pedaqoji fəaliyyətlər g&ouml;stərir.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Ali Məhkəmədə ke&ccedil;irilən a&ccedil;ıq məhkəmə iclaslarında h&uuml;quqş&uuml;naslıq ixtisasında təhsil alan tələbələrin iştirakı təmin edilir, onların Ali Məhkəmədə, muxtar respublikada fəaliyyət g&ouml;stərən digər məhkəmələrdə istehsalat təcr&uuml;bəsi ke&ccedil;məsinə geniş şərait yaradılır.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14pt; letter-spacing: -0.2pt;\">Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsinin fəaliyyətinin m&uuml;asir tələblər səviyyəsində qurulmasını g&ouml;stərən başqa bir amil də məhkəmədə zəngin h&uuml;quq ədəbiyyatı ilə təchiz olunmuş kitabxananın fəaliyyət g&ouml;stərməsidir. Bununla məhkəmə&shy;də fəaliyyət g&ouml;stərən hakimlər, aparat iş&ccedil;iləri, h&uuml;quqş&uuml;naslıq ixtisasında təhsil alan tələbələr m&uuml;xtəlif sahələrə aid qa&shy;nunvericilik və h&uuml;quq ədəbiyya&shy;tına olan tələbatını &ouml;dəyirlər</span><span style=\"box-sizing: border-box; font-size: 14pt;\">.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 13.6px; text-align: justify; text-indent: 18pt; outline: none !important;\"><span style=\"box-sizing: border-box; font-size: 14pt; outline: none !important;\">G&ouml;r&uuml;nd&uuml;y&uuml; kimi həm qanunvericiliyə gətirilən yeniliklər, həm də məhkəmələrin maddi təminat məsələlərinə g&ouml;stərilən diqqət və qayğı, o c&uuml;mlədən hakim&shy;lərin, məhkəmə iş&ccedil;ilərinin iş şəraitinin m&uuml;asir tələblər səviyyəsinə &ccedil;atdırıl&shy;ması Nax&ccedil;ıvan Muxtar Respublikası Ali Məhkəməsi tərəfindən ədalət m&uuml;&shy;hakiməsinin həyata ke&ccedil;irilməsi &uuml;zrə vəzifələrinin keyfiyyətlə yerinə yetiril&shy;məsinə, insan h&uuml;quq və azadlıqlarının səmərəli şəkildə qorunmasına xidmət edir. Ş&uuml;bhə yoxdur ki, g&ouml;r&uuml;lən bu işlər muxtar respubli&shy;kada b&uuml;t&uuml;n məhkəmə orqanlarının s&uuml;rətlə inkişaf etdirilməsinə b&ouml;y&uuml;k təkan vermiş və nəticədə muxtar respublikada insan h&uuml;quq və azadlıq&shy;larının daha m&ouml;hkəm təminatı &uuml;&ccedil;&uuml;n əlverişli zəmin yaratmışdır.</span></p>', '2022-05-04 06:49:17', '2022-05-04 06:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usefullinks`
--

CREATE TABLE `usefullinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usefullinks`
--

INSERT INTO `usefullinks` (`id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'usefullinks\\April2022\\QHK96bbEycTi3Pp0TynI.png', 'https://courts.gov.az/az/', 1, '2022-04-29 04:46:22', '2022-04-29 04:46:22'),
(2, 'usefullinks\\April2022\\IQvqQ3zdtOUJFhQIsh7f.png', 'https://www.justice.gov.az/', 1, '2022-04-29 04:51:05', '2022-04-29 04:51:05'),
(3, 'usefullinks\\April2022\\foXJmZaOMBTmHGZfYJE3.png', 'http://huquqiaktlar.nakhchivan.az/Akts.aspx', 1, '2022-04-29 04:51:00', '2022-04-29 04:53:28'),
(4, 'usefullinks\\April2022\\eW3JgcmIiAFuozGejCkX.png', 'http://www.alimeclis.az/', 1, '2022-04-29 04:54:00', '2022-04-29 04:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(6, 1, 'admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$/q6dpHFbXM77fhLruVOolu1G2l2tbGQtau32BnzuDu5DasNUFXNZC', NULL, NULL, '2022-04-27 15:23:25', '2022-04-27 15:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apparatuses`
--
ALTER TABLE `apparatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `decisionpresidia`
--
ALTER TABLE `decisionpresidia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decisions`
--
ALTER TABLE `decisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationmaterials`
--
ALTER TABLE `educationmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footersocials`
--
ALTER TABLE `footersocials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forcitizens`
--
ALTER TABLE `forcitizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forpersons`
--
ALTER TABLE `forpersons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internationaldocuments`
--
ALTER TABLE `internationaldocuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legalacts`
--
ALTER TABLE `legalacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measures`
--
ALTER TABLE `measures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nmrcourts`
--
ALTER TABLE `nmrcourts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photogalleries`
--
ALTER TABLE `photogalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supremecourts`
--
ALTER TABLE `supremecourts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `usefullinks`
--
ALTER TABLE `usefullinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apparatuses`
--
ALTER TABLE `apparatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `decisionpresidia`
--
ALTER TABLE `decisionpresidia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decisions`
--
ALTER TABLE `decisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educationmaterials`
--
ALTER TABLE `educationmaterials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footersocials`
--
ALTER TABLE `footersocials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forcitizens`
--
ALTER TABLE `forcitizens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forpersons`
--
ALTER TABLE `forpersons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internationaldocuments`
--
ALTER TABLE `internationaldocuments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `legalacts`
--
ALTER TABLE `legalacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `measures`
--
ALTER TABLE `measures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nmrcourts`
--
ALTER TABLE `nmrcourts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photogalleries`
--
ALTER TABLE `photogalleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supremecourts`
--
ALTER TABLE `supremecourts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usefullinks`
--
ALTER TABLE `usefullinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
