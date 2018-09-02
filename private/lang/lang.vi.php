<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Vietnamese language data (last modified: 2018.09.03).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

/** Prevents execution from outside of the script. */
if(!defined('SFSMassIPChecker')) {
    die('[SFS-Mass-IP-Checker] This should not be accessed directly.');
}

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'vi');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Tải về một bản sao mới của "bannedips.csv" từ SFS (chúng tôi sử dụng tập tin này để tránh cần phải thực hiện một số lớn không cần thiết của yêu cầu đến máy chủ);<br /><br />Vui lòng chờ đợi (trang sẽ làm mới tự động sau khi quá trình tải hoàn thành)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Không thể tìm thấy "%PATH%/private/bannedips.csv"!<br />Vui lòng tải bằng tay từ:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Sau khi tải về, giải nén các tập tin vào thư mục \'private\' của SFS Mass IP Checker, và sau đó thử lại.<br /><br />(( Chúng tôi sử dụng tập tin này để tránh cần phải thực hiện một số lớn không cần thiết của yêu cầu đến máy chủ. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Không thể ghi vào bộ nhớ cache!<br />Vui lòng kiểm tra quyền truy cập tập tin CHMOD của bạn!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Erroneous (Local).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Địa chỉ IP không hợp lệ!';
$SFSMassIPChecker['langdata']['failure_private'] = 'Địa chỉ IP địa phương hay riêng tư!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Thất bại (yêu cầu những không hiểu bằng cách SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Thất bại (yêu cầu báo lỗi hay hết giờ)!';
$SFSMassIPChecker['langdata']['failure_unknown'] = 'Một lỗi không xác định đã xảy ra.';
$SFSMassIPChecker['langdata']['input_submit'] = 'Trình';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Thêm dữ liệu spam';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Tải';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'Hỏi đáp';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Diễn đàn';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Trang chủ';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Tìm kiếm';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Hỗ trợ';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Công cụ hữu ích';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Có một lỗi';
$SFSMassIPChecker['langdata']['results_listed'] = 'Liệt kê';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Không được liệt kê';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Phân biên giới mục thông qua các dấu phẩy hay ngắt dòng. Mục nên bao gồm các địa chỉ IPv4.';
$SFSMassIPChecker['langdata']['success_local'] = 'Thành công (Địa phương).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Thành công (Xa).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Tần số';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'Địa chỉ IP';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Nhìn thấy lần cuối';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Trạng thái';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammer?';
