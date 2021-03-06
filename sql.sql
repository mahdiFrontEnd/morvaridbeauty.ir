INSERT INTO `admins` (`id`, `fname`, `lname`, `image_path`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'reza', 'templates/melody/images/faces/face5.jpg', 'admin@gmail.com', '2020-07-21 15:00:00', '$2y$10$D3DZKKJJ/g8ouwNsxhT8G.0KB3sEqx8k0Ql/lv3WTrhwjhCFRRANC', NULL, '2019-03-10 17:00:00', '2019-09-10 15:00:00');


INSERT INTO `users` (`id`, `fname`, `lname`, `image_path`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'user', 'as', 'user@gmail.com', '2020-07-07 19:30:00', '$2y$10$D3DZKKJJ/g8ouwNsxhT8G.0KB3sEqx8k0Ql/lv3WTrhwjhCFRRANC', NULL, '2020-01-10 12:12:13', '2020-01-10 12:12:13');


INSERT INTO `categories` (`id`, `title`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Big Blue Button', 'Big', 'product', '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(2, 'Live', 'Live', 'product', '2019-04-24 19:30:00', '2019-04-24 19:30:00');


INSERT INTO `products` (`id`, `admin_id`, `category_id`, `slug`, `image_path`, `thumbnail`, `publish`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'big-blue-button', '1', '1', 1, '2020-07-21 15:23:59', '2020-07-21 15:23:59'),
(5, 1, 1, 'live-streaming', '1', '1', 1, '2020-07-23 10:40:19', '2020-07-23 10:40:19');


INSERT INTO `product_translations` (`id`, `locale`, `title`, `description`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'fa', 'بیگ بلوباتن', '', 1, '2020-07-21 15:23:59', '2020-07-21 15:23:59'),
(2, 'en', 'big blue button', '', 1, '2020-07-21 15:23:59', '2020-07-21 15:23:59'),
(3, 'ar', 'البیگ بلو باتن', '', 1, '2020-07-21 15:23:59', '2020-07-21 15:23:59'),
(13, 'fa', 'پخش زنده رویداد', 'پخش زنده رویداد', 5, '2020-07-23 10:40:19', '2020-07-23 10:40:19'),
(14, 'en', 'live Streaming', 'live Streaming', 5, '2020-07-23 10:40:19', '2020-07-23 10:40:19'),
(15, 'ar', 'الپخش زنده', 'الپخش زنده', 5, '2020-07-23 10:40:19', '2020-07-23 10:40:19');




INSERT INTO `pricings` (`id`, `product_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(8, 1, 1, '2020-07-22 14:02:04', '2020-07-22 14:02:04'),
(9, 1, 1, '2020-07-22 14:12:13', '2020-07-22 14:12:13'),
(10, 1, 1, '2020-07-22 14:14:42', '2020-07-22 14:14:42'),
(11, 1, 1, '2020-07-22 14:15:01', '2020-07-22 14:15:01'),
(13, 1, 1, '2020-07-22 14:24:51', '2020-07-22 14:24:51'),
(14, 1, 1, '2020-07-22 14:25:24', '2020-07-22 14:25:24'),
(15, 1, 1, '2020-07-22 14:42:52', '2020-07-22 14:42:52'),
(16, 5, 1, '2020-07-23 12:01:29', '2020-07-23 12:01:29'),
(17, 5, 1, '2020-07-23 12:01:41', '2020-07-23 12:01:41'),
(18, 5, 1, '2020-07-23 12:03:21', '2020-07-23 12:03:21'),
(19, 5, 1, '2020-07-23 12:03:54', '2020-07-23 12:03:54'),
(20, 1, 1, '2020-07-23 12:09:11', '2020-07-23 12:09:11'),
(21, 1, 1, '2020-07-23 12:09:20', '2020-07-23 12:09:20'),
(22, 1, 1, '2020-07-23 12:38:57', '2020-07-23 12:38:57'),
(23, 1, 1, '2020-07-23 12:39:13', '2020-07-23 12:39:13'),
(24, 5, 1, '2020-07-23 12:39:30', '2020-07-23 12:39:30'),
(25, 5, 1, '2020-07-23 12:40:49', '2020-07-23 12:40:49');



INSERT INTO `pricing_items` (`id`, `product_id`, `title`, `publish`, `created_at`, `updated_at`) VALUES
(1, 1, 'نسخه', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(2, 1, 'کاربر همزمان آنلاین', 1, '2019-03-10 20:30:00', '2019-04-24 19:30:00'),
(3, 1, 'سرویس (ایران)', 0, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(4, 1, 'Processor & Ram', 1, '2019-03-10 20:30:00', '2019-03-10 20:30:00'),
(5, 1, 'ترافیک و پهنای باند', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(6, 1, 'هارد دیسک (SSD)', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(7, 1, 'پشتیبانی رایگان', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(8, 1, 'برگزاری وب کنفرانس', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(9, 1, 'تومان', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(10, 5, 'aa', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(11, 5, 'aa', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(12, 5, 'aa', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00'),
(13, 5, 'aa', 1, '2019-01-16 20:30:00', '2019-03-10 20:30:00');




INSERT INTO `pricing_pricing_item` (`pricing_id`, `pricing_item_id`, `value`) VALUES
(9, 1, 'sdsds sd sd sd sd'),
(11, 2, 'sdsds sd sd sd sd'),
(14, 2, 'ffff'),
(14, 1, 'ddddf'),
(15, 2, 'ffff'),
(15, 1, 'ddddf'),
(17, 4, '12'),
(17, 3, '33'),
(17, 2, '44'),
(17, 1, '5'),
(18, 4, '1212'),
(18, 3, '1212'),
(18, 2, '1212'),
(18, 1, '1212'),
(19, 4, '12'),
(19, 3, '12'),
(19, 2, '12'),
(19, 1, '12'),
(21, 4, '1'),
(21, 3, '1'),
(21, 2, '12'),
(21, 1, '1'),
(25, 13, '12'),
(25, 12, ''),
(25, 11, '12'),
(25, 10, '');
