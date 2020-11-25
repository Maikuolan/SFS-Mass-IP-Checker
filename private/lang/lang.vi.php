<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Vietnamese language data (last modified: 2020.11.25).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'vi',
    'bannedips_missing' => 'Tải về một bản sao mới của "bannedips.csv" từ SFS (chúng tôi sử dụng tập tin này để tránh cần phải thực hiện một số lớn không cần thiết của yêu cầu đến máy chủ);<br /><br />Vui lòng chờ đợi (trang sẽ làm mới tự động sau khi quá trình tải hoàn thành)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Không thể tìm thấy "%PATH%/private/bannedips.csv"!<br />Vui lòng tải bằng tay từ:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Sau khi tải về, giải nén các tập tin vào thư mục \'private\' của SFS Mass IP Checker, và sau đó thử lại.<br /><br />(( Chúng tôi sử dụng tập tin này để tránh cần phải thực hiện một số lớn không cần thiết của yêu cầu đến máy chủ. ))',
    'cant_write' => 'Không thể ghi vào bộ nhớ cache!<br />Vui lòng kiểm tra quyền truy cập tập tin CHMOD của bạn!',
    'erroneous_local' => 'Erroneous (Local).',
    'failure_badip' => 'Địa chỉ IP không hợp lệ!',
    'failure_private' => 'Địa chỉ IP địa phương hay riêng tư!',
    'failure_notunderstood' => 'Thất bại (yêu cầu những không hiểu bằng cách SFS)!',
    'failure_timeout' => 'Thất bại (yêu cầu báo lỗi hay hết giờ)!',
    'failure_unknown' => 'Một lỗi không xác định đã xảy ra.',
    'input_submit' => 'Trình',
    'linkname_addspamdata' => 'Thêm dữ liệu spam',
    'linkname_downloads' => 'Tải',
    'linkname_faq' => 'Hỏi đáp',
    'linkname_forum' => 'Diễn đàn',
    'linkname_home' => 'Trang chủ',
    'linkname_search' => 'Tìm kiếm',
    'linkname_support' => 'Hỗ trợ',
    'linkname_useful' => 'Công cụ hữu ích',
    'results_erroneous' => 'Có một lỗi',
    'results_listed' => 'Liệt kê',
    'results_not_listed' => 'Không được liệt kê',
    'separate_entries' => 'Phân biên giới mục thông qua các dấu phẩy hay ngắt dòng. Mục nên bao gồm các địa chỉ IPv4.',
    'success_local' => 'Thành công (Địa phương).',
    'success_remote' => 'Thành công (Xa).',
    'table_frequency' => 'Tần số',
    'table_ip_address' => 'Địa chỉ IP',
    'table_last_seen' => 'Nhìn thấy lần cuối',
    'table_lookup_status' => 'Trạng thái',
    'table_spammer' => 'Spammer?'
];
