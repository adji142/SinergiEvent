$(document).ready(function(){$("form#sendEmail").submit(function(){$(".error").hide();var a=!1,d=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,b=/^[0-9]+?\d{7}$/,c=/^(0[1-9]|[12][0-9]|3[01])[\/.](0[1-9]|1[012])[\/.](19|20)\d\d/;""==$("#nama").val()&&($("#nama").after('<div class="error">Tulis Nama anda</div>'),a=!0);""==$("#jumlah").val()&&($("#jumlah").after('<div class="error">Pilih jumlah</div>'),a=!0);var e=$("#produk").val();$("#harga").val();$("#virtarichLink").val();""==e&&($("#produk").after('<div class="error">Produk kosong</div>'), a=!0);e=$("#emailFrom").val();""==e?($("#emailFrom").after('<div class="error">Tulis Email anda</div>'),a=!0):d.test(e)||($("#emailFrom").after('<div class="error">Tulis Email yang valid</div>'),a=!0);d=$("#telepon").val();""==d?($("#telepon").after('<div class="error">Tulis nomor telp anda</div>'),a=!0):b.test(d)||($("#telepon").after('<div class="error">Tulis nomor telp yang valid</div>'),a=!0);0==$("#datepicker"+name).length?""==$("#pilihan").val()&&($("#pilihan").after('<div class="error">Pilih salah satu</div>'), a=!0):(b=$("#datepicker").val(),""==b?($("#datepicker").after('<div class="error">Pilih Tanggal</div>'),a=!0):c.test(b)||($("#datepicker").after('<div class="error">Pilih Tanggal yang valid</div>'),a=!0));c=$("#recaptcha_response_field").val();""==c&&($("#recaptcha_response_field").after('<div class="error">Tulis Kode Captcha</div>'),a=!0);""!=c&&(c=$("#recaptcha_challenge_field").val(),b=$("#recaptcha_response_field").val(),"success"!=$.ajax({type:"POST",url:templateDirectory+"/recaptcha.php",data:"recaptcha_challenge_field="+ c+"&recaptcha_response_field="+b,async:!1}).responseText&&($("#recaptcha_response_field").after('<div class="error">kode capthca salah , silahkan coba lagi</div>'),Recaptcha.reload(),a=!0));a||($("form#sendEmail .buttons").fadeOut("normal",function(){$(this).parent().append('<img src="/wp-content/themes/WP-Jasa/images/loading.gif" alt="Loading ..." height="31" width="31" />')}),a=$(this).serialize(),$.post($(this).attr("action"),a,function(a){$("form#sendEmail").slideUp("fast",function(){$(this).before('<p class="thanks"><strong>Terima Kasih</strong> Formulir Order anda sudah terkirim.<br/> Silahkan cek email anda untuk mengetahui detail pesanan dan pembayaran</p>')})})); return!1})});