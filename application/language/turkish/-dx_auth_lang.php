<?php

/*
	It is recommended for you to change 'auth_login_incorrect_password' and 'auth_login_username_not_exist' into something vague.
	For example: Username and password do not match.
*/

$lang['auth_login_incorrect_password'] = "Şifre Yanlış";
$lang['auth_login_username_not_exist'] = "Kullanıcı bulunamadı";

$lang['auth_username_or_email_not_exist'] = "Kullanıcı adı veya şifre bulunamadı";
$lang['auth_not_activated'] = "Hesabınız henüz aktif edilmemiş, lütfen aktifleştirmek için e-postanıza gelen bağlantıyı kullanınız.";
$lang['auth_request_sent'] = "Şifre değiştirme talebiniz alınmıştır. Lütfen e-postanızı kontrol ediniz.";
$lang['auth_incorrect_old_password'] = "Eski şifre yanlış.";
$lang['auth_incorrect_password'] = "Şifre yanlış.";

// Email subject
$lang['auth_account_subject'] = "%s Hesap Detayları";
$lang['auth_activate_subject'] = "%s etkinleştirme";
$lang['auth_forgot_password_subject'] = "Yeni Şifre İsteği";

// Email content
$lang['auth_account_content'] = "%s Hoş Geldiniz.<br/><br/>

Hesabınız başarıyla tanımlanmış olup detayları şöyledir,
<br/>
Giriş : %s <br/>
Email: %s <br/>
Şifre: %s <br/>
<br/><br/>


Saygılar,<br/>
 %s ";

$lang['auth_activate_content'] = "%s, Hoş geldiniz,
Hesabınızı aktifleştirmek için bağlantıyı kullanınız:
%s

Lütfen hesabınızı %s saat içinde etkinleştirin, aksi takdirde kaydınızı geçersiz hale gelecek ve tekrar kaydolmanız gerekecek.

Giriş yapmak için kullanıcı adınızı veya e-posta adresinizi kullanabilirsiniz.
Giriş bilgileriniz aşağıdaki gibidir:

Giriş: %s
Eposta: %s
Şifre: %s

Saygılar,
%s Ekibi";

$lang['auth_forgot_password_content'] = "%s,

Parolanızı değiştirmenizi rica ettiniz, çünkü parolayı unuttunuz.
Şifre değişikliği işlemini tamamlamak için lütfen bu bağlantıyı takip edin:
%s

Yeni Şifreniz: %s
Etkinleştirme Anahtarı: %s

İşlemi başarıyla tamamladıktan sonra, bu yeni şifreyi istediğiniz şifreye değiştirebilirsiniz.

Hesabınıza erişme ile ilgili daha fazla sorununuz varsa lütfen %s ile iletişime geçin.

Saygılar,
%s ";

/* End of file dx_auth_lang.php */
/* Location: ./application/language/english/dx_auth_lang.php */