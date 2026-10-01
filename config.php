<?php
/**
 * 中文音乐播放网站 - 配置文件
 * 支持 PHP 5.6.4 + MySQL 多存储引擎
 */

// ===== MySQL 数据库配置 =====
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'music_player');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8mb4');

// ===== 音乐库路径 =====
define('MUSIC_DIR', dirname(__FILE__) . '/music');
define('MUSIC_URL', '/music');

// ===== 应用配置 =====
define('APP_TITLE', '云音流 - 中文音乐播放站');
define('APP_VERSION', '1.0.0');
define('DEBUG_MODE', true);

// ===== MySQL 存储引擎配置 =====
// MyISAM - 默认高性能引擎（用于音乐列表）
// InnoDB - 支持事务和外键（用于用户数据）
// MEMORY - 内存表（用于临时数据和缓存）
// ARCHIVE - 存档引擎（用于历史记录）
define('ENGINE_TRACKS', 'MyISAM');      // 音乐轨道表
define('ENGINE_USERS', 'InnoDB');       // 用户表
define('ENGINE_PLAYLISTS', 'InnoDB');   // 播放列表
define('ENGINE_CACHE', 'MEMORY');       // 缓存表
define('ENGINE_LOGS', 'ARCHIVE');       // 日志存档

// ===== 支持的音乐格式 =====
$ALLOWED_EXTENSIONS = array('mp3', 'wav', 'flac', 'm4a', 'aac', 'ogg', 'opus', 'wma');

// ===== 时区 =====
date_default_timezone_set('Asia/Shanghai');

// ===== 错误处理 =====
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
}
?>
