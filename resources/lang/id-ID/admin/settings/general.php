<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domain Active Directory',
    'ad_domain_help'			=> 'Hal ini kadang-kadang sama sebagai domain email Anda, tetapi tidak selalu.',
    'ad_append_domain_label'    => 'Tambahkan nama domain',
    'ad_append_domain'          => 'Tambahkan nama domain ke bagian nama pengguna (username)',
    'ad_append_domain_help'     => 'Pengguna tidak diharuskan untuk menulis "nama_pengguna@domain.local", mereka cukup mengetikkan "nama_pengguna".',
    'admin_cc_email'            => 'Tembusan Email',
    'admin_cc_email_help'       => 'Send a copy of checkin/checkout emails to this address.',
    'admin_cc_always' => 'Always send copy upon checkin/checkout',
    'admin_cc_when_acceptance_required' => 'Only send copy upon checkout if acceptance is required',
    'admin_settings'            => 'Pengaturan Admin',
    'is_ad'				        => 'Ini adalah server Active Directory',
    'alerts'                	=> 'Pemberitahuan',
    'alert_title'               => 'Perbarui Pengaturan Notifikasi',
    'alert_email'				=> 'Kirim pemberitahuan kepada',
    'alert_email_help'          => 'Alamat email atau daftar distribusi yang ingin Anda kirimi peringatan, dipisahkan dengan koma.',
    'alerts_enabled'			=> 'Aktifkan pemberitahuan',
    'alert_interval'			=> 'Ambang batas pemberitahuan kadaluarsa (dalam hari)',
    'alert_inv_threshold'		=> 'Ambang pemberitahuan persediaan',
    'allow_user_skin'           => 'Izinkan tema dari pengguna',
    'allow_user_skin_help_text' => 'Mencentang kotak ini akan memungkinkan pengguna untuk mengganti skin UI yang berbeda.',
    'asset_ids'					=> 'Aset id',
    'audit_interval'            => 'Interval Audit',
    'audit_interval_help'       => 'Jika Anda diharuskan untuk mengaudit fisik aset Anda secara berkala, masukkan interval dalam bulan yang Anda gunakan. Jika Anda memperbarui nilai ini, semua "tanggal audit berikutnya" untuk aset dengan tanggal audit mendatang akan diperbarui.',
    'audit_warning_days'        => 'Ambang Peringatan Audit',
    'audit_warning_days_help'   => 'Berapa hari sebelumnya yang harus kami peringatkan saat aset akan dilelang?',
    'auto_increment_assets'		=> 'Buat tag aset yang bertambah otomatis',
    'auto_increment_prefix'		=> 'Awalan (pilihan)',
    'auto_incrementing_help'    => 'Aktifkan tag aset yang bertambah otomatis terlebih dahulu untuk mengatur ini',
    'backups'					=> 'Cadangan',
    'backups_help'              => 'Buat, unduh, dan pulihkan cadangan ',
    'backups_restoring'         => 'Memulihkan dari Cadangan',
    'backups_clean' => 'Bersihkan database yang dicadangkan sebelum pemulihan',
    'backups_clean_helptext' => "Ini dapat berguna jika Anda beralih antar versi database",
    'backups_upload'            => 'Unggah Cadangan',
    'backups_path'              => 'Cadangan di server disimpan di <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file  ',
    'backups_logged_out'         => 'Semua pengguna yang ada, termasuk Anda, akan keluar setelah pemulihan selesai.',
    'backups_large'             => 'Cadangan yang sangat besar mungkin mengalami timeout pada percobaan pemulihan dan mungkin masih perlu dijalankan melalui baris perintah. ',
    'barcode_settings'			=> 'Pengaturan barcode',
    'confirm_purge'			    => 'Konfirmasi pembersihan',
    'confirm_purge_help'		=> 'Ketikkan teks "HAPUS" pada kotak di bawah ini untuk menghapus catatan yang dipilih. Tindakan ini tidak dapat diurungkan dan secara PERMANEN akan menghapus semua item dan pengguna yang dihapus sementara. (Anda harus membuat cadangan terlebih dahulu, demi keamanan data anda.)',
    'custom_css'				=> 'Custom CSS',
    'custom_css_placeholder'	=> 'Add your custom CSS',
    'custom_css_help'			=> 'Masukan modifikasi CSS yang hendak anda gunakan. Jangan sertakan &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'URL Reset Kata Sandi Kustom',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL lupa kata sandi bawaan pada layar login, berguna untuk mengarahkan orang ke fungsi reset kata sandi LDAP internal atau yang dihosting. Ini secara efektif akan menonaktifkan fungsionalitas lupa kata sandi lokal.',
    'dashboard_message'			=> 'Pesan Dasbor',
    'dashboard_message_help'	=> 'Teks ini akan muncul di dasbor bagi siapa pun yang memiliki izin untuk melihat dasbor.',
    'default_currency'  		=> 'Mata uang utama',
    'default_eula_text'			=> 'EULA utama',
    'default_eula_text_placeholder' => 'Add your default EULA text',
    'default_language'			=> 'Bahasa utama',
    'default_eula_help_text'	=> 'Anda juga dapat mengaitkan kustom EULAs untuk kategori aset tertentu.',
    'acceptance_note'           => 'Add a note for your decision (required if declining)',
    'display_asset_name'        => 'Tampilan Nama Aset',
    'display_checkout_date'     => 'Tampilan Tanggal Keluar',
    'display_eol'               => 'Tampilan EOL dalam bentuk tabel',
    'display_qr'                => 'Tampilkan barcode 2D',
    'display_alt_barcode'		=> 'Tampilan barcode 1D',
    'barcode_type'				=> 'Tipe Barcode 2D',
    'alt_barcode_type'			=> 'Tipe Barcode 1D',
    'enabled'                   => 'Diaktifkan',
    'eula_settings'				=> 'Konfigurasi EULA',
    'eula_markdown'				=> 'EULA mengijinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'empty_row_count'           => 'Field Start Offset (Empty Rows)',
    'empty_row_count_help'      => 'Fields will begin populating after this many empty rows are skipped at the top of the label.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Jenis file yang diterima adalah ico, png, dan gif. Format gambar lain mungkin tidak berfungsi di semua browser.',
    'favicon_size'          => 'Favicons harus berupa gambar persegi/kotak, ukuran 16x16 piksel.',
    'footer_text'               => 'Teks Footer Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul di footer sebelah kanan. Tautan diizinkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">marka bergaya Github</a>. Baris baru, header, gambar, dll mungkin akan mengakibatkan hasil yang tidak sesuai.',
    'footer_text_placeholder'   => 'Optional footer text',
    'general_settings'			=> 'Konfigurasi umum',
    'general_settings_help'     => 'EULA Default dan lainnya',
    'generate_backup'			=> 'Membuat cadangan',
    'google_workspaces'         => 'Google Workspace',
    'header_color'              => 'Warna Header',
    'info'                      => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'label_logo_size'           => 'Logo persegi/kotak terlihat sesuai - akan ditampilkan di kanan atas setiap label aset. ',
    'laravel'                   => 'Versi Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grup Izin Default',
    'ldap_default_group_info'   => 'Pilih grup untuk ditetapkan kepada pengguna yang baru disinkronkan. Ingatlah bahwa pengguna mengambil izin dari grup tempat mereka ditetapkan.',
    'no_default_group'          => 'Tidak Ada Grup Default',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Kunci TLS Client-Side LDAP',
    'ldap_client_tls_cert'      => 'Sertifikat TLS Client-Side LDAP',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Konfigurasi LDAP',
    'ldap_client_tls_cert_help' => 'Sertifikat Client-Side TLS dan Kunci untuk koneksi LDAP biasanya hanya berguna di konfigurasi Google Workspace dengan "Secure LDAP". Keduanya diperlukan.',
    'ldap_location'             => 'Lokasi LDAP',
'ldap_location_help'             => 'Isian kolom Lokasi LDAP harus digunakan jika <strong>OU tidak digunakan dalam Base Bind DN.</strong> Kosongkan ini jika pencarian OU sedang digunakan.',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata sandi LDAP yang valid dari DN dasar yang Anda tentukan di atas untuk menguji apakah pengaturan login LDAP Anda telah dikonfigurasi dengan benar. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_login_sync_help'      => 'Ini hanya menguji bahwa LDAP dapat tersinkronisasi dengan benar. Jika kueri Otentikasi LDAP Anda tidak benar, pengguna mungkin masih belum dapat masuk. PERTAMA-TAMA ANDA HARUS MENYIMPAN PENGATURAN LDAP ANDA.',
    'ldap_manager'              => 'Pengelola LDAP',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap:// (untuk yang tidak terenkripsi) atau ldaps:// (untuk TLS atau SSL)',
    'ldap_server_cert'			=> 'Validasi sertifikat LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Izinkan sertifikat SSL tak terdaftar',
    'ldap_server_cert_help'		=> 'Pilih kotak ini jika anda menggunakan sertifikat SSL self sign dan menerima sertifikat SSL yang tak terdaftar.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini digunakan jika anda menggunakan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'Nama pengguna LDAP',
    'ldap_dept'                 => 'Departemen LDAP',
    'ldap_phone'                => 'Nomor Telepon LDAP',
    'ldap_jobtitle'             => 'Judul Pekerjaan LDAP',
    'ldap_country'              => 'Negara LDAP',
    'ldap_pword'                => 'Katakunci LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Cache LDAP Passwords',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords cached as local hashed passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Kolom nama pengguna',
    'ldap_lname_field'          => 'Nama Belakang',
    'ldap_fname_field'          => 'LDAP Nama Depan',
    'ldap_auth_filter_query'    => 'Permintaan Otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Nilai ini digunakan untuk menentukan apakah pengguna yang disinkronkan dapat masuk ke Snipe-IT. <strong>Ini tidak memengaruhi kemampuan untuk memeriksa barang yang dipinjamkan atau dikembalikan kepada mereka</strong>, dan harus berupa <strong>nama atribut</strong> dalam AD/LDAP Anda, <strong>bukan nilainya</strong>. <br><br>Jika kolom ini diatur ke nama kolom yang tidak ada di AD/LDAP Anda, atau nilai di kolom AD/LDAP diatur ke <code>0</code> atau <code>false</code>, <strong>login pengguna akan dinonaktifkan</strong>. Jika nilai di kolom AD/LDAP diatur ke <code>1</code> atau <code>true</code> atau <em>teks lainnya</em>, maka pengguna dapat login. Ketika kolom tersebut kosong di AD Anda, kami menghormati atribut <code>userAccountControl</code>, yang biasanya memungkinkan pengguna yang tidak ditangguhkan untuk masuk.',
    'ldap_invert_active_flag'   => 'LDAP Invert Active Flag',
    'ldap_invert_active_flag_help'     => 'If enabled: when the value returned by LDAP Active Flag is <code>0</code> or <code>false</code> the user account will be active.',
    'ldap_emp_num'              => 'Nomor karyawan LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Uji LDAP',
    'ldap_test_sync'            => 'Uji Sinkronisasi LDAP',
    'license'                   => 'Lisensi Perangkat Lunak',
    'load_remote'               => 'Muat Avatar Jarak Jauh',
    'load_remote_help_text'		=> 'Hapus centang kotak ini jika instalasi Anda tidak dapat memuat skrip dari internet eksternal. Ini akan mencegah Snipe-IT mencoba memuat avatar dari Gravatar atau sumber eksternal lainnya.',
    'login'                     => 'Percobaan Login',
    'login_attempt'             => 'Percobaan Login',
    'login_ip'                  => 'Alamat IP',
    'login_success'             => 'Sukses?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'Daftar percobaan login',
    'login_note'                => 'Login Catatan',
    'login_note_placeholder'            => "If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you.",
    'login_note_help'           => 'Opsional memasukkan beberapa kalimat di layar masuk Anda, misalnya untuk membantu orang-orang yang telah menemukan perangkat yang hilang atau dicuri. Bidang ini menerima <a href="https://help.github.com/articles/github-flavored-markdown/">posur rasa Github</a>',
    'login_remote_user_text'    => 'Opsi masuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Aktifkan Login dengan Remote User Header',
    'login_remote_user_enabled_help' => 'Opsi ini memungkinkan Otentikasi melalui header REMOTE_USER sesuai dengan "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Nonaktifkan mekanisme autentikasi lainnya',
    'login_common_disabled_help' => 'Opsi ini menonaktifkan mekanisme otentikasi lainnya. Cukup aktifkan opsi ini jika Anda yakin bahwa login REMOTE_USER Anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'Penyesuaian URL logout',
    'login_remote_user_custom_logout_url_help' => 'Jika diisi, pengguna akan dialihkan ke URL ini setelah keluar atau logout. Berfungsi untuk menutup sesi pengguna dengan sempurna.',
    'login_remote_user_header_name_text' => 'Tajuk nama pengguna khusus',
    'login_remote_user_header_name_help' => 'Gunakan tajuk yang ditentukan alih-alih REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan saat mencetak',
    'logo_print_assets_help'    => 'Menggunakan branding Anda pada semua hasil cetak daftar aset ',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) diberikan kepada perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan penuh beberapa perusahaan',
    'scope_locations_fmcs_support_text'  => 'Scope Locations with Full Multiple Companies Support',
    'scope_locations_fmcs_support_help_text'  => 'Restrict locations to their selected company.',
    'scope_locations_fmcs_check_button' => 'Check Compatibility',
    'scope_locations_fmcs_test_needed' => 'Please Check Compatibility to enable this',
    'scope_locations_fmcs_support_disabled_text'  => 'This option is disabled because you have conflicting locations set for :count or more items.',
    'show_in_model_list'   => 'Tampilkan dalam Model Dropdown',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil per halaman',
    'php'                       => 'Versi PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Anda harus memasang php-gd untuk menampilkan kode QR, baca petunjuk pemasangan.',
    'php_gd_warning'            => 'Plugin PHP pengolahan citra dan GD tidak diinstal.',
    'pwd_secure_complexity'     => 'Kompleksitas Password',
    'pwd_secure_complexity_help' => 'Pilih aturan kerumitan kompleksitas yang ingin Anda tegakkan.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Kata sandi tidak boleh sama dengan nama depan, nama belakang, email, atau nama pengguna',
    'pwd_secure_complexity_letters' => 'Mengharuskan setidaknya satu huruf',
    'pwd_secure_complexity_numbers' => 'Mengharuskan setidaknya satu angka',
    'pwd_secure_complexity_symbols' => 'Mengharuskan setidaknya satu simbol',
    'pwd_secure_complexity_case_diff' => 'Mengharuskan setidaknya satu huruf besar dan satu huruf kecil',
    'pwd_secure_min'            => 'Karakter minimum kata sandi',
    'pwd_secure_min_help'       => 'Nilai minimum yang diizinkan adalah 8',
    'pwd_secure_uncommon'       => 'Mencegah password umum',
    'pwd_secure_uncommon_help'  => 'Ini akan melarang pengguna menggunakan kata kunci umum dari 10.000 sandi teratas yang dilaporkan mengalami pelanggaran.',
    'qr_help'                   => 'Hidupkan kode QR sebelumnya',
    'qr_text'                   => 'Teks kode QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Perbarui pengaturan SAML',
    'saml_help'                 => 'Pengaturan SAML',
    'saml_enabled'              => 'SAML diaktifkan',
    'saml_integration'          => 'Integrasi SAML',
    'saml_sp_entityid'          => 'ID Entitas',
    'saml_sp_acs_url'           => 'URL Assertion Consumer Service (ACS)',
    'saml_sp_sls_url'           => 'URL Single Logout Service (SLS)',
    'saml_sp_x509cert'          => 'Sertifikat Publik',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Anda dapat menentukan metadata IdP menggunakan URL atau file XML.',
    'saml_attr_mapping_username' => 'Pemetaan Atribut - Nama Pengguna',
    'saml_attr_mapping_username_help' => 'NameID akan digunakan jika pemetaan atribut tidak ditentukan atau tidak valid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Jadikan SAML sebagai login utama',
    'saml_forcelogin_help'      => 'Anda dapat menggunakan \'/login?nosaml\' untuk membuka halaman login normal.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'Ini akan menyebabkan pengguna pertama kali diarahkan ke IdP saat logout. Biarkan tidak dicentang jika IdP tidak mendukung SLO SAML yang dimulai SP dengan benar.',
    'saml_custom_settings'      => 'Pengaturan Kustom SAML',
    'saml_custom_settings_help' => 'Anda dapat menentukan pengaturan tambahan ke perpustakaan onelogin/php-saml. Gunakan dengan risiko Anda sendiri.',
    'saml_download'             => 'Unduh Metadata',
    'setting'                   => 'Pengaturan',
    'settings'                  => 'Pengaturan',
    'show_alerts_in_menu'       => 'Tampilkan pemberitahuan di menu atas',
    'show_archived_in_list'     => 'Aset yang Diarsipkan',
    'show_archived_in_list_text'     => 'Tampilkan aset yang diarsipkan dalam daftar "semua aset"',
    'show_assigned_assets'      => 'Tampilkan aset yang ditetapkan ke aset',
    'show_assigned_assets_help' => 'Tampilkan aset yang ditetapkan ke aset lain di Lihat Pengguna -> Aset, Lihat Pengguna -> Info -> Cetak Semua yang Ditugaskan dan di Akun -> Lihat Aset yang Ditugaskan.',
    'show_images_in_email'     => 'Tampilkan gambar dalam email',
    'show_images_in_email_help'   => 'Hapus centang kotak ini jika instalasi Snipe-IT Anda berada di belakang VPN atau jaringan tertutup dan pengguna di luar jaringan tidak akan dapat memuat gambar yang disajikan dari instalasi ini di email mereka.',
    'site_name'                 => 'Nama Situs',
    'integrations'               => 'Integrasi',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook General',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Uji Menyimpan',
    'webhook_title'               => 'Perbarui Pengaturan Webhook',
    'webhook_help'                => 'Pengaturan Integrasi',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Uji integrasi :app',
    'webhook_integration_help'    => 'Integrasi :app bersifat opsional, namun endpoint dan channel diperlukan jika Anda ingin menggunakannya. Untuk mengonfigurasi integrasi :app, Anda harus terlebih dahulu <a href=":webhook_link" target="_new" rel="noopener">membuat webhook masuk</a> di akun :app Anda. Klik tombol <strong>Uji Integrasi :app</strong> untuk memastikan pengaturan Anda benar sebelum menyimpan. ',
    'webhook_integration_help_button'    => 'Setelah Anda menyimpan informasi :app Anda, tombol uji akan muncul.',
    'webhook_test_help'           => 'Uji apakah integrasi :app Anda dikonfigurasi dengan benar. ANDA HARUS MENYIMPAN PENGATURAN :app YANG TELAH DIPERBARUI TERLEBIH DAHULU.',
    'shortcuts_enabled'         => 'Aktifkan Shortcut',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Mendukung Footer Links ',
    'support_footer_help'       => 'Tentukan siapa yang melihat tautan ke info Dukungan Snipe-IT dan Panduan Pengguna',
    'version_footer'            => 'Versi pada Footer ',
    'version_footer_help'       => 'Tentukan siapa saja yang dapat melihat versi dan build number dari Snipe-IT.',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Pengaturan perbaruan',
    'value'                     => 'Harga',
    'brand'                     => 'Merek',
    'brand_help'                => 'Logo, Nama Website',
    'web_brand'                 => 'Jenis Web Branding',
    'about_settings_title'      => 'Tentang pengaturan',
    'about_settings_text'       => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inch)',
    'next_auto_tag_base'        => 'Berikutnya auto-increment',
    'page_padding'              => 'Marjin halaman (inch)',
    'privacy_policy_link'       => 'Tautan ke Kebijakan Privasi',
    'privacy_policy'            => 'Kebijakan privasi',
    'privacy_policy_link_help'  => 'Jika url disertakan di sini, tautan ke kebijakan privasi Anda akan dimasukkan dalam footer aplikasi dan di email apa pun yang dikirimkan sistem, sesuai dengan GDPR. ',
    'purge'                     => 'Pembersihan catatan yang telah terhapus',
    'purge_deleted'             => 'Hapus Permanen Data Terhapus ',
    'labels_display_bgutter'    => 'Ukuran bawah label',
    'labels_display_sgutter'    => 'Ukuran samping label',
    'labels_fontsize'           => 'Ukuran huruf label',
    'labels_pagewidth'          => 'Lebar halaman label',
    'labels_pageheight'         => 'Tinggi kertas label',
    'label_gutters'        => 'Spasi label (inci)',
    'page_dimensions'        => 'Dimensi halaman (inch)',
    'label_fields'          => 'Field label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'l',
    'height_h'        => 't',
    'show_url_in_emails'                => 'Tautan ke Snipe-IT di Email',
    'show_url_in_emails_help_text'      => 'Hapus centang pada kotak ini jika Anda tidak ingin menautkan kembali ke instalasi Snipe-IT Anda di footer email Anda. Berguna jika sebagian besar pengguna Anda tidak pernah masuk.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Tinggi thumbnail maks',
    'thumbnail_max_h_help'   => 'Tinggi maksimum piksel yang dapat ditampilkan thumbnail dalam tampilan daftar. Min 25, maks 500.',
    'two_factor'        => 'Dua faktor otentikasi',
    'two_factor_secret'        => 'Kode Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Aktifkan Dua Faktor',
    'two_factor_reset'        => 'Reset Dua Faktor Rahasia',
    'two_factor_reset_help'        => 'Ini akan memaksa pengguna untuk mendaftarkan perangkat mereka dengan aplikasi autentikator mereka lagi. Ini dapat berguna jika perangkat mereka yang terdaftar saat ini hilang atau dicuri. ',
    'two_factor_reset_success'          => 'Dua perangkat faktor berhasil di-reset',
    'two_factor_reset_error'          => 'Dua faktor perangkat reset gagal',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor jika saat ini tidak diaktifkan akan segera memaksa Anda untuk melakukan otentikasi dengan perangkat yang terdaftar di Google Auth. Anda akan memiliki kemampuan untuk mendaftarkan perangkat Anda jika seseorang tidak terdaftar saat ini.',
    'two_factor_enabled_help'        => 'Ini akan mengaktifkan autentikasi dua faktor menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (Pengguna dapat mengaktifkan atau menonaktifkan jika diizinkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Cacat',
    'two_factor_enter_code'	=> 'Masukkan Kode Dua Faktor',
    'two_factor_config_complete'	=> 'Kirim Kode',
    'two_factor_enabled_edit_not_allowed' => 'Administrator Anda tidak mengizinkan Anda untuk mengedit pengaturan ini.',
    'two_factor_enrollment_text'	=> "Diperlukan dua faktor otentikasi, namun perangkat Anda belum terdaftar. Buka aplikasi Google Authenticator Anda dan pindai kode QR di bawah ini untuk mendaftarkan perangkat Anda. Setelah mendaftarkan perangkat Anda, masukkan kode di bawah ini",
    'require_accept_signature'      => 'Membutuhkan tanda tangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan fitur ini akan mengharuskan pengguna untuk secara fisik menandatangani untuk menerima aset.',
    'require_checkinout_notes'  => 'Wajibkan Catatan pada Saat Pengembalian/Peminjaman',
    'require_checkinout_notes_help_text'    => 'Mengaktifkan fitur ini akan mewajibkan pengisian kolom catatan saat mengembalikan atau meminjam-mengambil aset.',
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'unique_serial'                => 'Nomor seri unik',
    'unique_serial_help_text'                => 'Menandai boks ini akan membuat adanya batasan keunikan pada tiap nomor seri aset',
    'zerofill_count'        => 'Jarak tag aset, termasuk angka nol',
    'username_format_help'   => 'Pengaturan ini hanya akan digunakan oleh proses impor jika nama pengguna tidak diberikan dan kami harus membuatkan nama pengguna untuk Anda.',
    'oauth_title' => 'Pengaturan API OAuth',
    'oauth_clients' => 'Klien OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Pengaturan Oauth Endpoint',
    'oauth_no_clients' => 'Anda belum membuat klien OAuth.',
    'oauth_secret' => 'Rahasia',
    'oauth_authorized_apps' => 'Aplikasi yang Diotorisasi',
    'oauth_redirect_url' => 'URL Pengalihan',
    'oauth_name_help' => ' Sesuatu yang akan dikenali dan dipercaya oleh pengguna Anda.',
    'oauth_scopes' => 'Cakupan',
    'oauth_callback_url' => 'URL callback otorisasi aplikasi Anda',
    'create_client' => 'Buat Klien',
    'no_scopes' => 'Tidak adan cakupan',
    'asset_tag_title' => 'Perbarui Pengaturan Tag Aset',
    'barcode_title' => 'Perbarui Pengaturan Barcode',
    'barcodes' => 'Barcode',
    'barcodes_help_overview' => 'Pengaturan Barkode &amp; QR',
    'barcodes_help' => 'Ini akan mencoba menghapus barcode yang di-cache. Ini biasanya hanya digunakan jika pengaturan barcode Anda telah berubah, atau jika URL Snipe-IT Anda telah berubah. Barcode akan dibuat ulang saat diakses berikutnya.',
    'barcodes_spinner' => 'Mencoba menghapus file...',
    'barcode_delete_cache' => 'Hapus Cache Barcode',
    'branding_title' => 'Perbarui Pengaturan Branding atau Merk',
    'general_title' => 'Perbarui Pengaturan Umum',
    'mail_test' => 'Kirim Percobaan',
    'mail_test_help' => 'Ini akan mencoba mengirim email percobaan ke :replyto.',
    'filter_by_keyword' => 'Filter dengan mengatur kata kunci',
    'security' => 'Keamanan',
    'security_title' => 'Perbarui Pengaturan Keamanan',
    'security_help' => 'Dua Faktor, Batasan Kata Sandi',
    'groups_help' => 'Grup izin akun',
    'localization' => 'Lokalisasi',
    'localization_title' => 'Perbarui Pengaturan Lokalisasi',
    'localization_help' => 'Bahasa, tampilan tanggal',
    'notifications' => 'Notifikasi',
    'notifications_help' => 'Peringatan Email & Pengaturan Audit',
    'asset_tags_help' => 'Penambahan dan awalan',
    'labels' => 'Label',
    'labels_title' => 'Perbarui Pengaturan Label',
    'labels_help' => 'Pengaturan Barcode &amp; label',
    'purge_help' => 'Pembersihan catatan yang telah terhapus',
    'ldap_extension_warning' => 'Sepertinya ekstensi LDAP tidak terinstal atau diaktifkan di server ini. Anda masih dapat menyimpan pengaturan, tetapi Anda perlu mengaktifkan ekstensi LDAP untuk PHP sebelum sinkronisasi atau login LDAP berfungsi.',
    'ldap_ad' => 'LDAP/AD',
    'ldap_test_label' => 'Test LDAP Sync',
    'ldap_test_login' => ' Test LDAP Login',
    'ldap_username_placeholder' => 'LDAP Username',
    'ldap_password_placeholder' => 'LDAP Password',
    'employee_number' => 'Nomor Karyawan',
    'create_admin_user' => 'Buat Pengguna',
    'create_admin_success' => 'Berhasil! Pengguna admin Anda telah ditambahkan!',
    'create_admin_redirect' => 'Klik di sini untuk menuju login aplikasi Anda!',
    'setup_migrations' => 'Migrasi Database ::',
    'setup_no_migrations' => 'Tidak ada yang perlu dimigrasikan. Tabel database Anda sudah diatur!',
    'setup_successful_migrations' => 'Tabel database Anda telah dibuat',
    'setup_migration_output' => 'Keluaran migrasi:',
    'setup_migration_create_user' => 'Selanjutnya: Buat Pengguna',
    'ldap_settings_link' => 'Halaman Pengaturan LDAP',
    'slack_test' => 'Uji <i class="fab fa-slack"></i> Integrasi',
    'status_label_name' => 'Status Label Name',
    'super_admin_only'  => 'Super Admin Only',
    'label2_enable'           => 'Mesin Label Baru',
    'label2_enable_help'      => 'Beralih ke mesin label baru. <b> Catatan: Anda perlu menyimpan pengaturan ini sebelum mengatur yang lain.<b>',
    'label2_template'         => 'Templat',
    'label2_template_help'    => 'Pilih templat yang digunakan untuk membuat label',
    'label2_title'            => 'Judul',
    'label2_title_help'       => 'Judul yang akan ditampilkan pada label yang mendukungnya',
    'label2_title_help_phold' => 'Placeholder <code>{COMPANY}</code> akan digantikan dengan nama entitas aset',
    'label2_asset_logo'       => 'Gunakan Logo Asset',
    'label2_asset_logo_help'  => 'Gunakan logo dari company yang ditetapkan pada aset, bukan nilai pada <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipe Barcode 1D',
    'label2_1d_type_help'     => 'Format untuk barcode 2D',
    'label2_2d_type'          => 'Tipe Barcode 2D',
    'label2_2d_type_help'     => 'Format untuk barcode 2D',
    'label2_2d_target'        => 'Targer Barcode 2D',
    'label2_2d_target_help'   => 'Data yang akan dimuat dalam barcode 2D',
    'label2_fields'           => 'Definisi Kolom',
    'label2_fields_help'      => 'Kolom dapat ditambahkan, dihapus, dan diurutkan ulang di bagian kiri. Untuk setiap kolom, beberapa opsi untuk Label dan Sumber Data dapat ditambahkan, dihapus, dan diurutkan ulang di bagian kanan.',
    'purge_barcodes' => 'Purge Barcodes',
    'help_asterisk_bold'    => 'Teks yang dimasukkan sebagai <code>**text**</code>  akan ditampilkan dengan huruf tebal',
    'help_blank_to_use'     => 'Biarkan kosong untuk menggunakan nilai dari <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> akan menggunakan nilai dari <code>:setting_name</code>.
<br>Perhatikan bahwa nilai barcode harus mematuhi spesifikasi barcode terkait agar berhasil diger. Silakan lihat <a href="https://snipe-it.readme.io/docs/barcodes">dokumentasi <i class="fa fa-external-link"></i></a> untuk detail lebih lanjut. ',
    'asset_id'              => 'ID Aset',
    'data'               => 'Data',
    'default'               => 'Default',
    'none'                  => 'Kosong',
    'google_callback_help' => 'Ini harus dimasukkan sebagai URL panggilan balik atau callback URL di pengaturan aplikasi Google OAuth Anda di <strong><a href="https://console.cloud.google.com/" target="_blank">Google Developer Console organisasi Anda <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Pengaturan Login Google Workspace',
    'enable_google_login'  => 'Aktifkan pengguna untuk login menggunakan Google Workspace',
    'enable_google_login_help'  => 'Pengguna tidak akan diprovisikan secara otomatis. Mereka harus memiliki akun yang sudah ada di sini DAN di Google Workspace, dan nama pengguna di sini harus cocok dengan alamat email Google Workspace mereka.',
    'mail_reply_to' => 'Alamat Balasan Email',
    'mail_from' => 'Alamat Pengirim Email',
    'database_driver' => 'Driver Database',
    'bs_table_storage' => 'Penyimpanan Tabel',
    'timezone' => 'Zona Waktu',
    'test_mail' => 'Test Mail',
    'profile_edit'          => 'Edit Profil',
    'profile_edit_help'          => 'Izinkan pengguna untuk mengedit profil mereka sendiri.',
    'default_avatar' => 'Custom Default Avatar',
    'default_avatar_help' => 'Gambar ini akan ditampilkan sebagai profil jika pengguna tidak memiliki foto profil.',
    'restore_default_avatar' => 'Pulihkan <a href=":default_avatar" data-toggle="lightbox" data-type="image">avatar default sistem asli</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Peringatan Jatuh Tempo Check-in',
    'due_checkin_days_help' => 'Berapa hari sebelum perkiraan check-in dari aset yang harus terdaftar di halaman "Due for checkin"?',
    'no_groups' => 'Belum ada grup yang dibuat. Kunjungi <code>Pengaturan Admin > Grup Izin</code> untuk menambahkannya.',
    'text' => 'Text',
    'manager_view' => 'Manager View',
    'manager_view_enabled_text' => 'Enable Manager View',
    'manager_view_enabled_help' => 'Allow managers to view assigned items to their direct and indirect reports in their account view.',

    'username_formats' => [
        'username_format'		=> 'Format pengguna',
        'firstname_lastname_format'	=> 'Nama depan - Nama belakang (jane.smith)',
        'first_name_format'	        => 'First Name (jane)',
        'last_name_format'		=> 'Last Name (doe)',
        'filastname_format'			=> 'First Initial Last Name (jsmith)',
        'lastnamefirstinitial_format' =>  'Last Name First Initial (smithj)',
        'firstname_lastname_underscore_format' => 'First Name Last Name (jane_smith)',
        'firstinitial_lastname' => 'First Initial Last Name (j.smith)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j)',
        'firstnamelastname'     => 'First Name Last Name (janesmith)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes)',
        'lastnamefirstname'      => 'Nama Belakang.Nama Depan (smith.jane)',
    ],

    'email_formats' => [
        'email_format'			=> 'Format email',
        'firstname_lastname_format'	=> 'Nama depan - Nama belakang (jane.smith@example.com)',
        'first_name_format'		=> 'Nama Depan (jane@example.com)',
        'last_name_format'		=> 'Last Name (doe@example.com)',
        'filastname_format'			=> 'Inisial pertama - Nama belakang (jsmith@example.com)',
        'lastnamefirstinitial_format' =>  'Nama Depan First Initial (smithj@example.com)',
        'firstname_lastname_underscore_format' => 'Nama Depan Nama Belakang (jane_smith@example.com)',
        'firstinitial_lastname' => 'Nama Belakang Inisial Pertama (j.smith@example.com)',
        'lastname_firstinitial' => 'Nama Belakang Inisial Depan (smith_j@example.com)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j@example.com)',
        'firstnamelastname'     => 'Nama Depan Nama Belakang (janesmith@example.com)',
        'firstnamelastinitial'  => 'Nama Depan Inisial Belakang (janes@example.com)',
        'lastnamefirstname'      => 'Nama Belakang.Nama Depan (smith.jane@example.com)',
    ],



    'logo_labels' => [
        'acceptance_pdf_logo'       => 'PDF Logo',
        'email_logo'                => 'Logo Email',
        'label_logo'                => 'Label Logo',
        'logo'                      => 'Site Logo',
        'favicon'                   => 'Favicon',
    ],

    'logo_help' => [
        'email_logo_size'       => 'Logo persegi/kotak di email terlihat paling sesuai. ',
    ],

    'logo_option_types' => [
        'text' => 'Text',
        'logo' => 'Logo',
        'logo_and_text' => 'Logo and Text',
    ],


    'legends' => [
        'scoping' => 'Scoping',
        'formats' => 'Default Formats',
        'profiles' => 'User Profiles',
        'eula' => 'EULA & Acceptance Preferences',
        'misc_display' => 'Miscellaneous Display Options',
        'email' => 'Email Preferences',
        'checkin' => 'Checkin Preferences',
        'dashboard' => 'Login & Dashboard Preferences',
        'misc' => 'Miscellaneous',
        'logos' => 'Logos & Display',
        'colors' => 'Colors & Skins',
        'footer' => 'Footer Preferences',
        'security' => 'Security Preferences',
        'general' => 'General',
        'intervals' => 'Intervals & Thresholds',
    ],


    /* Keywords for settings overview help */
    'keywords' => [
        'brand'             => 'footer, logo, print, theme, skin, header, colors, color, css',
        'general_settings'  => 'dukungan company, tanda tangan, penerimaan, format email, format nama pengguna, gambar, per halaman, thumbnail, Eula, gravatar, tos, dasbor, privasi',
        'groups'            => 'izin, grup izin, otorisasi',
        'labels'            => 'labels, barcodes, barcode, sheets, print, upc, qr, 1d, 2d',
        'localization'      => 'lokalisasi, mata uang, lokal, zona waktu, internasionalisasi, bahasa, terjemahan',
        'php_overview'      => 'phpinfo, system, info',
        'purge'             => 'hapus permanen',
        'security'          => 'sandi, persyaratan, dua faktor, kata sandi umum, login jarak jauh, keluar, autentikasi',
        'notifications'     => 'alerts, email, notifications, audit, threshold, email alerts, cc',
    ],

];
