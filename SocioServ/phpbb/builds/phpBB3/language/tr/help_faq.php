<?php
/** 
*
* help_faq [Turkish]
*
* @package language
* @version $Id: help_faq.php,v 1.39 2007/06/09 11:10:24 acydburn Exp $ 
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

// DEVELOPERS PLEASE NOTE 
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Giriş ve Kayıt sorunları'
	),
	array(
		0 => 'Neden giriş yapamıyorum?',
		1 => 'Kayıt oldunuz mu? Giriş yapabilmek için önceden kayıt olmanız gerek. Yoksa siteden yasaklandınız mı (o halde bu anlamda bir mesaj görmeniz gerekir)? Eğer öyleyse, webmaster veya site yöneticisiyle irtibata geçip sebebini sorabilirsiniz. Eğer kayıt olduysanız ve yasaklanmış olmamanıza rağmen giriş yapamıyorsanız, tekrar tekrar kullanıcı adınızı ve şifrenizi kontrol edin. Genelde hata burada oluyor. Sorun bu değilse site yönetimi ile iletişime geçin, belki site için yanlış ayar yapmış olabilirler.'
	),
	array(
		0 => 'Neden kayıt olmam gerekiyor?',
		1 => 'Kayıt olmanıza gerek olmayabilirdi aslında. Mesaj gönderebilmek için kaydın şart olması, site yöneticisinin (yönetici) kararına bağlı. Ayrıca kayıt olunca bazı özel imkanlara ulaşabilirsiniz. Örneğin mesajlarınızın yanında kendinize ait küçük bir resim (avatar) gösterme, özel mesaj gönderme, tanıdığınız kullanıcılara e-posta gönderme veya kullanıcı gruplarına katılma imkanlarına misafir kullanıcılar sahip değildir. Kayıt işlemi çok basit olduğu için kayıt olmanız önerilir.'
	),
	array(
		0 => 'Neden otomatik olarak çıkışım yapılıyor?',
		1 => 'Giriş sayfasında gördüğünüz <em>Her ziyaretimde otomatik giriş yap</em> kutucuğunu işaretlemediğiniz sürece, site sizi sadece belirli bir süre için giriş yapmış kabul eder. Böylece kaydınızın başkaları tarafından kullanılması önlenir. Girişinizin devamlı kalması için, bu komutu seçmeniz yeterlidir. Fakat başka şahıslarında kullandığı (örn. herhangi bir kütüphaneye, internet kafeye, üniversiteye vs. ait) bir bilgisayardan giriş yapıyorsanız, bu komutu seçmemeniz önerilir. Eğer bu kutucuğu göremiyorsanız, bu demektir ki; site yöneticisi bu özelliği kapatmıştır.'
	),
	array(
		0 => 'Çevrimiçi kullanıcı listesinde kullanıcı adımın görünmesini nasıl önleyebilirim?',
		1 => 'Kullanıcı Kontrol Paneliniz içerisinde “Site tercihleri” altında <em>Çevrimiçi olduğunuzu gizleyin</em> isminde bir seçenek bulacaksınız. Eğer bu seçenek <em>Evet</em> seçeneği ile aktif edilirse, çevrimiçi olduğunuzu sadece yöneticiler, moderatörler ve kendiniz görebileceksiniz. Bu durumda gizli bir kullanıcı olarak sayılacaksınız.'
	),
	array(
		0 => 'Şifremi unuttum!',
		1 => 'Telaşa kapılmayın! Eski şifrenizi öğrenmek mümkün olmasa bile, yerine değişik bir şifre alabilirsiniz. Giriş sayfasını açıp <em>Şifremi unuttum</em> bağlantısına tıklayın ve tarif edilen işlemleri uygulayın. Kısa sürede tekrar çevrimiçi olduğunuzu göreceksiniz.'
	),
	array(
		0 => 'Kayıt oldum ama giriş yapamıyorum!',
		1 => 'Öncelikle, kullanıcı adınızı ve şifrenizi kontrol edin. Eğer onlar doğruysa, o zaman şu iki durumdan biri meydana gelmiş olabilir. Eğer COPPA desteği açıksa ve kayıt sırasında 13 yaşından küçük olduğunuzu belirttiyseniz, size tarif edilen işlemleri uygulamanız gerekmektedir. Bazı mesaj panoları yeni kayıtlarda ayrıca aktivasyon istemektedir, giriş yapmadan önce bu aktivasyonun kendiniz ya da bir yönetici tarafından yapılması gerekmektedir; bu bilgi kayıt sırasında gösterilmiştir. Eğer size bir e-posta gönderildiyse, açıklamaları takip edin. Eğer bir e-posta almadıysanız, yanlış bir e-posta adresi belirtmiş olabilirsiniz ya da e-posta, bir spam filtresi tarafından spam olarak seçilmiş olabilir. Eğer doğru e-posta adresi belirttiğinize eminseniz, bir yönetici ile iletişime geçmeyi deneyin.'
	),
	array(
		0 => 'Daha önce kayıt olmuştum ama artık giriş yapamıyorum?!',
		1 => 'İlk kayıt olduğunuz zaman size bir e-posta gönderilmişti, oradan kullanıcı adınızı ve şifrenizi kontrol edin ve tekrar deneyin. Bazı sebeplerden dolayı bir yönetici hesabınızı deaktif etmiş ya da silmiş olabilir. Ayrıca, bazı siteler veritabanını azaltmak için uzun bir süredir mesaj göndermeyen kullanıcıları periyodik aralıklarla silerler. Eğer bu olmuşsa, tekrar kayıt olmayı deneyin ve tartışmalara katılın.'
	),
	array(
		0 => 'COPPA nedir?',
		1 => 'COPPA ya da Child Online Privacy and Protection Act of 1998, Birleşik Devletlerde web sitelerinin 13 yaşından küçüklerin ebeveynlerinden potansiyel bilgi toplayabilmek için yazılı izin almayı gerekli tutan bir kanundur, ya da başka bir deyişle yasal veli/vasi onay şeklidir, veliler 13 yaşından küçüklerden kişisel kimlik bilgilerinin toplanması için izin verirler. Eğer bu uygulama ile kayıt olmak ya da bu uygulama ile bir web sitesine kayıt olmak size güvenilir gelmiyorsa, yardım için bir yasal danışman ile iletişime geçin. Not: phpBB Takımları yasal destek sağlamaz ve genel konular hariç, herhangi bir çeşit yasa ile ilgili bir durum için iletişim göstermez.',
	),
	array(
		0 => 'Neden kayıt olamıyorum?',
		1 => 'Kayıt olma girişiminizde web sitesi sahibi\'nin IP adresinizi banlaması ya da kullanıcı adına izin vermemesi mümkündür. Web sitesi sahibi ayrıca yeni ziyaretçilerin giriş yapmasını önlemek için kaydı kapatmış olabilir. Yardım için bir site yöneticisiyle iletişime geçin.',
	),
	array(
		0 => '“Tüm site çerezlerini sil” nedir?',
		1 => '“Tüm site çerezlerini sil” özelliği, phpBB3 tarafından oluşturulan siteye girişiniz ve doğrulanmanız için tutulan çerezleri kapsar. Ayrıca eğer site sahibi tarafından ayarlandıysa bunun gibi sağlanan okuma özelliklerini silmeye yarar. Eğer giriş ya da çıkış problemleri yaşıyorsanız, site çerezlerini silmek size yardımcı olabilir.',
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Seçenekleri ve ayarları'
	),
	array(
		0 => 'Ayarlarımı nasıl değiştirebilirim?',
		1 => 'Eğer kayıt bir kullanıcı iseniz tüm ayarlarınız site veritabanına kaydedilir. Ayarlarınızı değiştirmek için Kullanıcı Kontrol Panelinizi ziyaret edin; bu bağlantı genelde sayfaların üst kısmında bulunur. Bu sistem size tüm ayarlarınızı ve tercihlerinizi değiştirme izni verecektir.'
	),
	array(
		0 => 'Gösterilen zamanlar yanlış!',
		1 => 'Gösterilen zaman, sizin bulunduğunuz yerden farklı bir zaman dilimindeyse bu olabilir. Bu durumu düzeltmek için, Kullanıcı Kontrol Panelinizi ziyaret edin ve ayrıntılı alandan uygun zaman diliminize göre değiştirin, ör. Londra, Paris, New York, Sydney, gibi. Not: Bu zaman dilimi değişikliklerini ve diğer bir çok ayarları sadece kayıtlı kullanıcılar yapabilir. Eğer kayıtlı değilseniz, şimdi kaydolmanın tam zamanı.'
	),
	array(
		0 => 'Değişik bir zaman dilimi seçtim ama saatler hala yanlış!',
		1 => 'Eğer doğru zaman dilimini seçtiğinize eminseniz ve Yaz Saati/GITZ doğruysa ve zaman hala yanlışsa, o zaman sunucu saatinde kayıtlı zaman yanlıştır. Lütfen problemin düzelmesi için bir yöneticiyi haberdar edin.'
	),
	array(
		0 => 'Konuştuğum dil listede yok!',
		1 => 'Site yöneticisi konuştuğunuz dili destekleyen paketi kurmamıştır, ya da hiç kimse bu siteyi konuştuğunuz dile henüz çevirmemiştir. Site yöneticilerine başvurup, kendi dilinizi destekleyen paketi kurmalarını rica edin. Eğer böyle bir dil paketi yoksa, yeni bir çeviri oluşturmakta özgürsünüz. Daha fazla bilgi phpBB web sitesinde bulunabilir (site sayfaların altındaki bağlantıya bakın).'
	),
	array(
		0 => 'Kullanıcı adımın altında resim göstermek için ne yapmalıyım?',
		1 => 'Mesajların görüntülendiği sayfalarda kullanıcı adlarının altında iki tür resim görebilirsiniz. Kullandığınız temaya bağlı olarak birincisi, kullanıcı rütbenizi gösterir ve genelde gönderdiğiniz mesaj sayısına bağlı olarak belirli bir sayıda yıldız veya kare şeklindedir. İkincisi ise avatar olarak bilinen biraz daha büyük bir resimdir. Bu resim genelde kullanıcıya ait ve özeldir. Avatar kullanma imkanını site yöneticisi saptar. Ayrıca avatar\'ların ne şekilde kullanılabileceğinide saptar. Eğer avatar kullanamıyorsanız, site yöneticisi ile iletişime geçip bu imkanı ne sebepten dolayı iptal ettiğini sorabilirsiniz.'
	),
	array(
		0 => 'Rütbem nedir ve onu nasıl değiştirebilirim?',
		1 => 'Genelde kullanıcı rütbenizi doğrudan değiştirmeniz mümkün değildir (kullanıcı rütbesi, gönderdiğiniz mesajın yanında bulunan isminizin altında ve kullanıcı profili sayfasında görülür). Çoğu forum sitesinde kullanıcı rütbeleri, gönderilen mesajların sayısını veya yetkili üyeleri belirlemek için kullanılır, örn. yöneticiler veya site yöneticileri özel bir rütbeye sahip olabilir. Lütfen gereksiz yere mesaj gönderipte rütbenizi yükseltmeye çalışmayın, elde edeceğiniz tek sonuç, yöneticilerin mesajlarınızın sayısını düşürmesi olacaktır.'
	),
	array(
		0 => 'Bir kullanıcıya ait e-posta linkini tıklayınca giriş yapmam isteniyor?',
		1 => 'Üzgünüz fakat e-posta formuyla maalesef sadece kayıtlı kullanıcılar e-posta gönderebilir (eğer yönetici bu özelliği aktif ettiyse). Bunun sebebi, e-posta sisteminin anonim kullanıcılar tarafından suistimal edilmesini önlemektir.'
	),
	array(
		0 => '--',
		1 => 'Mesaj Gönderme'
	),
	array(
		0 => 'Bir foruma yeni bir başlık nasıl gönderilir?',
		1 => 'Çok kolay, forumu veya başlığı görüntüleme sayfasında <em>Yeni Başlık Gönder</em> düğmesini tıklayın. Yeni mesaj göndermeden önce kayıt olmanız gerekebilir. Forum ve başlık sayfalarının alt kısmında yapabileceğiniz bütün işlemlerin listesini görebilirsiniz (örn. <em>Bu forumda yeni başlıklar gönderebilirsiniz</em> vs. gibi).'
	),
	array(
		0 => 'Bir mesajı nasıl silebilir veya düzenleyebilirim?',
		1 => 'Site yöneticisi veya moderatör olmadığınız sürece, sadece kendinize ait mesajları düzenleyebilir veya silebilirsiniz. Gönderdiğiniz bir mesajı <em>düzenle</em> butonuna tıklayarak düzenleyebilirsiniz (bu imkan bazen sadece belirli bir süre için mevcuttur). Eğer mesajınıza birileri cevap göndermişse, başlığa döndüğünüzde mesajınızın altında metni kaç defa düzenlediğinizi gösteren kısa bir yazı göreceksiniz. Mesajınıza henüz cevap verilmemişse, bu not görülmez. Ayrıca mesajınız site yöneticileri veya moderatörler tarafından düzenlenince de bu metin görünmez. Buna rağmen mesajı neden düzenlediklerine dair kendilerine has bir not bırakabilirler. Not: Normal kullanıcılar herhangi birinden cevap geldikten sonra bir mesajı silemezler.'
	),
	array(
		0 => 'Mesajıma bir imza nasıl eklerim?',
		1 => 'Herhangi bir mesaja imzanızı ekleyebilmek için önce bir imza oluşturmanız gerekmektedir. Bu, Kullanıcı Kontrol Paneliniz yoluyla yapılır. Daha sonra mesaj gönderme formunun alt kısmındaki <em>İmzamı ekle</em> seçeneğini seçip mesajınıza imzanızı ekleyebilirsiniz. Gönderdiğiniz bütün mesajlara genel bir ayar olarak imzanızın eklenmesini istiyorsanız, profilinizdeki seçeneği tıklayın. Buna rağmen dilediğiniz her mesaj için imzanızın eklenmesini önleyebilirsiniz (mesaj gönderme formunda imza ekleme seçeneğinin işaretini kaldırmanız yeterlidir).'
	),
	array(
		0 => 'Nasıl bir anket oluştururum?',
		1 => 'Anket oluşturmak kolaydır, yeni bir başlık gönderirken (veya bir başlığın ilk mesajını düzenlerken (bu tabiki sahip olduğunuz izne bağlıdır)), mesaj gönderme formunun altında “Anket oluştur” sekmesini göreceksiniz (böyle bir formu göremiyorsanız, anket oluşturma yetkiniz yok demektir). Anket için “Anket sorusu” kısmına bir başlık girmelisiniz ve sonra “Anket seçenekleri” alanına, her satıra ayrı bir seçenek olacak şekilde en az iki seçenek girmelisiniz (bu limit site yönetici tarafından ayarlanır). Ayrıca kullanıcıların oylama sırasında seçebilecekleri seçeneklerin sayısını “Her kullanıcı için seçenek” bölümünün altından ayarlayabilirsiniz, anket için gün cinsinden bir zaman sınırı belirleyebilirsiniz (sınırsız sürede olması için 0 yazın) ve son olarak eğer kullanıcıların kendi oylarını değiştirme izni varsa oy verdikleri seçeneği değiştirebilirler.'
	), 
  array( 
    0 => 'Neden daha fazla anket seçeneği ekleyemiyorum?', 
    1 => 'Anket seçenekleri için limit, site yöneticisi tarafından ayarlanır. Eğer anketiniz için izin verilen miktardan daha fazla seçenek eklemeniz gerekiyorsa, site yöneticisi ile iletişime geçin.'
	),
	array(
		0 => 'Bir anketi nasıl değiştirir veya silerim?',
		1 => 'Anketlerde, mesajlar gibi sadece gönderen kullanıcı, bir moderatör veya bir yönetici tarafından değiştirilebilir. Bir anketi değiştirmek için, başlığın ilk mesajını tıklayın; ilgili anket daima bu mesaja bağlıdır. Ankete henüz katılan olmadıysa, hazırlayan kullanıcı tarafından değiştirilebilir veya silinebilir. Fakat, eğer üyeler ankete katılmışsa, sadece forum ve site yöneticileri tarafından değiştirilebilir veya silinebilir. Böylece bir süre sonra şıkları değiştirip anket sonuçlarını saptırma olanağı kalmaz.'
	),
	array(
		0 => 'Neden bir foruma erişimim yok?',
		1 => 'Bazı forumlar sadece belirli kullanıcılara veya kullanıcı gruplarına açık olabilir. Mesajları okumak, görüntülemek, göndermek ya da diğer işlemler için özel yetki gerekebilir. Size erişim verilebilmesi için bir moderatör ya da site yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Neden eklentiler ekleyemiyorum?',
		1 => 'Her forumda, her grupta, veya her kullanıcı temelinde eklenti izinleri vardır. Site yöneticisi mesaj gönderdiğiniz belirli forum için eklenen eklentilere izin vermemiş olabilir, ya da muhtemelen sadece bazı gruplar eklenti gönderebiliyordur. Eğer eklenti eklemenin sizin için neden kapalı olduğu hakkında bir şüpheniz varsa site yöneticiyle iletişime geçin.'
	),
	array(
		0 => 'Neden bir uyarı aldım?',
		1 => 'Her site yöneticisi, siteleri için kendi kurallarını belirlemiştir. Eğer kurallardan birini ihlal ettiğinizi düşünürlerse, size bir uyarı verebilirler. Not: Bu durum, site yöneticisi’nin kararındadır, ve phpBB Grubu verilen bu uyarı ile ilgili herhangi bir şey yapamaz. Eğer neden bir uyarı aldığınızı bilmiyorsanız, site yöneticisi ile iletişime geçin.'
	),
	array(
		0 => 'Bir moderatöre mesajları nasıl bildirebilirim?',
		1 => 'Eğer site yöneticisi buna izin veriyorsa, bildiri yapmak istediğiniz mesaja gidin ve orada mesaj bildirileri için bir buton göreceksiniz. Bu butona tıklayarak mesaj bildirisi için zorunlu adımlara ulaşacaksınız.'
	),
	array(
		0 => 'Başlığa mesaj gönderilirkenki “Kaydet” butonu nedir?',
		1 => 'Bu, sonraki bir tarihte girilecek ve tamamlanacak olan mesajlarınızı kaydetmeye izin verir. Kaydedilen bir mesajı yeniden doldurmak için, Kullanıcı Kontrol Panelini ziyaret edin.'
	),
	array(
		0 => 'Neden mesajımın onaylanması gerekiyor?',
		1 => 'Site yöneticisi, foruma mesaj göndermek için ilk önce mesajların incelenmesi gerektiğine karar vermiş olabilir. Ayrıca yönetici, sizi bir kullanıcı grubuna yerleştirmiş olabilir ve bu grubun mesajları gönderilmeden önce incelenmesi gerekiyor olabilir. Daha fazla bilgi için lütfen site yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Başlığımı nasıl darbelerim?',
		1 => '“Başlığı darbele” bağlantısını görüp tıkladığınız zaman, başlığı “darbeleyerek” forumun ilk sayfasında en üst sıraya çıkarabilirsiniz. Fakat, eğer bu bağlantıyı göremiyorsanız, o zaman başlık darbeleme özelliği kapatılmış olabilir ya da darbelemeler arası izin verilen zamana henüz ulaşılmamıştır. Ayrıca cevap gelene kadar başlığın basit bir şekilde darbelenmesi mümkündür. Buna rağmen, site kurallarını takip ettiğinize emin olun.'
	),
	array(
		0 => '--',
		1 => 'Biçimlendirme ve Başlık Tipleri'
	),
	array(
		0 => 'BBCode nedir?',
		1 => 'BBCode HTML\'in özel bir uygulamasıdır. Forum\'a yazdığınız mesajlarda BBCode kullanabilme imkanını site yöneticisi saptar. Ayrıca mesaj gönderme formundaki seçenekler sayesinde dilediğiniz mesajlarda BBCode\'ı iptal etmeniz mümkündür. BBCode, HTML\'e benzer tarzdadır fakat tag\'ler &lt; ve &gt; yerine köşeli parantez içine alınır: [ ve ]. Ayrıca nelerin nasıl görüntülendiği daha iyi kontrol edilebilir. BBCode hakkında daha geniş bilgiler için, mesaj gönderme sayfasından ulaşabileceğiniz rehbere bakınız.'
	),
	array(
		0 => 'HTML kullanabilir miyim?',
		1 => 'Hayır. Bu sitede HTML mesajları göndermek ve farklı HTML kodları kullanmak mümkün değildir. Daha fazla biçimlendirme için HTML yerine BBCode kullanarak uygulayabilirsiniz.'
	),
	array(
		0 => 'İfadeler nedir?',
		1 => 'İfadeler veya Semboller, belirli duygu ifadelerini vermek için kullanılan küçük resimler halindeki kısa kodlardır. Örn. :) mutlu, :( ise üzgün anlamındadır. Kullanabileceğiniz ifadelerin tam listesini mesaj gönderme formunda görebilirsiniz. İfadeleri aşırı derecede kullanmamaya özen gösterin, onlar metin yoksa okunmaz hale gelebilir ve bir moderatör mesajınızı düzenlemeye ya da silmeye karar verebilir. Site yöneticisi ayrıca bir mesajınızda kullanabileceğiniz en fazla ifade limitini ayarlamış olabilir'
	),
	array(
		0 => 'Resim gönderebilir miyim?',
		1 => 'Gönderdiğiniz mesajla beraber resimde görüntülenebilir. Fakat şu anda siteye doğrudan resim göndermek mümkün değildir. Bu yüzden umuma açık bir web sunucusunda kayıtlı bir resme link vermeniz gerek, örn. http://www.umuma-acik-sunucu.net/resim.gif . Kendi bilgisayarınızda bulunan bir resme link vermeniz mümkün değil (bilgisayarınız umuma açık bir web sunucu olmadığı sürece). Ayrıca, umuma açık olmayan ve sadece şifreyle ulaşılan resimlere link vermek mümkün değildir (örn. hotmail veya yahoo mailboxlarında vs. kayıtlı resimler). Resim görüntülemek için, BBCode\'ın [img] tag\'ini ya da (müsaade verilmişse) HTML kullanabilirsiniz.'
	),
	array(
		0 => 'Global duyurular nedir?',
		1 => 'Global duyurular önemli bilgiler içerir ve onları mümkün olan en kısa zamanda okumalısınız. Global duyurular her forumun başında görünecektir ve ayrıca Kullanıcı Kontrol Panelinizden görebilirsiniz. Gerekli izinlere sahipseniz sizde bir global duyuru gönderebilirsiniz, bu izinler yönetici tarafından ayarlanır.'
	),
	array(
		0 => 'Duyurular nedir?',
		1 => 'Duyurular çoğu zaman önemli bilgileri içerir, en kısa zamanda okumanızı öneririz. Duyurular, ilgili forumun her sayfasının başında görülür. Duyuru gönderebilmeniz için bu yetkiye sahip olmanız gerek. Yetkilerinizi ise site yöneticisi saptar.'
	),
	array(
		0 => 'Sabit başlıklar nedir?',
		1 => 'Sabit başlıklar, ilgili forumun ilk sayfasında, duyuruların hemen altında görülür. Çoğu zaman önemli bilgileri içerirler, mümkünse okumanızı öneririz. Duyurular için geçerli olduğu gibi, herhangi bir foruma sabit başlık göndermek için gereken yetkileri site yöneticisi saptar.'
	),
	array(
		0 => 'Kilitli başlıklar nedir?',
		1 => 'Bu başlıkları forum moderatörü veya site yöneticisi kilitler. Kilitli başlıkları yanıtlamak mümkün değildir, içerdikleri anketler otomatik olarak sona erir. Başlıklar bir çok nedenlerden dolayı kilitlenmiş olabilir. Ayrıca site yöneticisi tarafından verilen izinlere bağlı olarak kendi başlıklarınızı kilitleyebilirsiniz.'
	),
	array(
		0 => 'Başlık ikonları nedir?',
		1 => 'Mesajlara, içeriğini işaret edecek başlık ikon resimleri tanımlanabilir. Başlık ikonlarının kullanımı yönetici tarafından ayarlanan izinlere bağlıdır.'
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Seviyeleri ve Grupları'
	),
	array(
		0 => 'Yöneticiler nedir?',
		1 => 'Yöneticiler, sitenin her bölümünde en çok yetkiye sahip olan üyelerdir. Bu üyeler, sitenin her türlü işlevini kontrol edebilir: izin verme, yetkilendirme, kullanıcı yasaklama, kullanıcı grupları oluşturma, moderatör yetkilerini verme vs. Ayrıca onlar site kurucusu tarafından verilen ayarlara bağlı olarak bütün forumlarda tam moderatör yetkilerine sahip olabilirler.'
	),
	array(
		0 => 'Moderatörler nedir?',
		1 => 'Moderatörler (ya da onların grupları), günlük olarak forumun çalışmasını kontrol eden şahıslar veya gruplardır. Başlıkları değiştirme ve silme yetkisine sahip olabilirler. Ayrıca moderatör oldukları forumdaki başlıkları kilitleyebilir, taşıyabilir, silebilir ve bölebilirler. Genelde moderatörlerin görevi, <em>off-topic</em>, yani başlık konusuyla ilgisi olmayan yanıtların veya hakaret ve saldırı niteliğinde metinlerin gönderilmesini önlemektir.'
	),
	array(
		0 => 'Kullanıcı grupları nedir?',
		1 => 'Kullanıcı grupları, site yöneticilerinin kullanıcıları grup halinde ayırabilmesi için öngörülen bir yöntemdir. Her kullanıcı (çoğu sitelerden farklı olarak) bir çok gruba üye olabilir ve her gruba ayrı ayrı izinler tanımlanabilir. Bu şekilde site yöneticileri belirli kullanıcılara rahatlıkla moderatör yetkilerini veya özel forumlara ulaşma yetkisini vs. verebilir'
	),
	array(
		0 => 'Bir kullanıcı grubuna nasıl katılabilirim?',
		1 => 'Bir kullanıcı grubuna katılabilmek için, Kullanıcı Kontrol Panelinizden “Kullanıcı grupları” bağlantısına tıklayın; oradan tüm kullanıcı gruplarını görüntüleyebilirsiniz. Grupların tümü <em>erişime açık</em> olmayabilir. Bazılarına katılmak için onay gerekebilir ve bazıları kapalı ya da gizli üyeliklere sahip olabilir. Eğer grup açık ise, ilgili bağlantıya tıklayarak katılabilirsiniz. Eğer bir gruba katılmak için onay gerekiyorsa ilgili bağlantıya tıklayarak istek yapabilirsiniz. İsteğinizin kullanıcı grubu lideri tarafından onaylanması gerek, onlar size neden gruba katılmak istediğinizi sorabilirler. İsteğiniz reddedilirse grup liderini rahatsız etmeyin; bunun çeşitli nedenleri olsa gerek.'
	),
	array(
		0 => 'Bir kullanıcı grubunun lideri olmak için ne yapmam gerek?',
		1 => 'Kullanıcı grupları bir yönetici tarafından oluşturulur, genellikle bir kullanıcı grubu lideri belirlenir. Eğer yeni bir kullanıcı grubu oluşturmak istiyorsanız, ilk önce bir yöneticiyle iletişime geçmelisiniz; bir özel mesaj göndermeyi deneyin.'
	),
	array(
		0 => 'Neden bazı kullanıcı grupları farklı renkte görünüyor?',
		1 => 'Site yöneticisi bir kullanıcı grubunun üyelerine bir renk belirler, ve bu grubun üyelerinin kolayca tanınması mümkün olur.'
	),
	array(
		0 => '“Varsayılan kullanıcı grubu” nedir?',
		1 => 'Eğer bir kullanıcı grubundan daha fazlasının üyesi iseniz, varsayılan olarak kullanmak için belirlenen grubunuzun rengi ve rütbesi gösterilir. Site yöneticisi, Kullanıcı Kontrol Panelinizden varsayılan kullanıcı grubunuzu değiştirmenize izin vermiş olabilir.'
	),
	array(
		0 => '“Takım” linki nedir?',
		1 => 'Bu sayfa site yönetiminin bir listesini size belirtir, site yöneticileri ile moderatörlerinin bilgilerini ve diğer detaylarla onların yönettikleri forumları içerir.'
	),
	array(
		0 => '--',
		1 => 'Özel Mesajlar'
	),
	array(
		0 => 'Özel mesaj gönderemiyorum!',
		1 => 'Bunun üç sebebi olabilir; henüz kayıt olmamış veya giriş yapmamışsınız, veya site yöneticisi bütün site için özel mesajları iptal etmiş. Üçüncü olanak ise: site yöneticisi sizin bu imkanı kullanmanızı önlemiş olabilir, bu durumda kendisine nedenini sormanız gerekir.'
	),
	array(
		0 => 'İstemediğim özel mesajları almaya devam ediyorum!',
		1 => 'İleride özel mesajlar sistemine belirli kişilerden gelen mesajları iptal etme imkanını ekleyeceğiz. Şimdilik herhangi bir şahıstan istemediğiniz özel mesajlar alıyorsanız, site yöneticisine başvurun. O herhangi bir kullanıcıyı özel mesaj göndermekten men edebilir.'
	),
	array(
		0 => 'Bu forum sitesinde herhangi birinden spam e-posta aldım!',
		1 => 'Üzgünüz. Aslında bu sitenin sunduğu e-posta gönderme işlevi bundan korunmak için birçok önlemi almış bulunuyor. Aldığınız spam e-postanın bir kopyasını site yöneticisine gönderin. Özellikle aldığınız e-posta’nın başlık kısmını (to (kime), subject (konu) vs.) iletmeyi unutmayın, bu kısımda e-postayı gönderen kullanıcı hakkında bilgiler bulunur. Site yöneticileri bu bilgilerle meseleyi takip edebilir.'
	),
	array(
		0 => '--',
		1 => 'Arkadaşlar ve Düşmanlar'
	),
	array(
		0 => 'Arkadaşlarım ve Düşmanlarım listesi nedir?',
		1 => 'Bu listeleri kullanarak mesaj panosunun diğer üyelerini toplayabilirsiniz. Arkadaşlar listenize eklenen üyeler, onlara özel mesajlar göndermeye ve çevrimiçi durumlarını görüntülemeye kolay erişim sağlamak için Kullanıcı Kontrol Panelinizde listelenecektir. Tema uygun desteği sağlıyorsa, bu kullanıcılardan gelen mesajlar ayrıca detaylı ve belirgin olarak görünebilir. Eğer düşmanlar listenize bir kullanıcı eklediyseniz onlar tarafından oluşturulan mesajlar varsayılan olarak gizlenecektir.'
	),
	array(
		0 => 'Kullanıcıları Arkadaşlar veya Düşmanlar listeme nasıl ekleyebilir / silebilirim?',
		1 => 'Listenize kullanıcıları iki yolla ekleyebilirsiniz. Her kullanıcı’nın profilinde, onları Arkadaşlar ya da Düşmanlar listenize eklemek için bir bağlantı olacaktır. Alternatif olarak Kullanıcı Kontrol Paneliniz’den, direkt olarak kullanıcıların üye adlarını girerek ekleyebilirsiniz. Ayrıca aynı sayfayı kullanarak kullanıcıları listenizden silebilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Forumlarda Arama'
	),
	array(
		0 => 'Bir forumda ya da forumlarda nasıl arama yapabilirim?',
		1 => 'Ana sayfa görüntülenirken, forum görüntülenirken ya da başlık görüntülenirken yerleşik arama kutusunun içerisine aranacak terimi girerek arama yapabilirsiniz. Gelişmiş arama yapmak için forumda tüm sayfalarda bulunan “Arama” bağlantısına tıklayabilirsiniz. Arama erişiminiz kullandığınız temaya bağlı olarak değişebilir.'
	),
	array(
		0 => 'Neden arama yaptığımda sonuç çıkmıyor?',
		1 => 'Aramanız muhtemelen son derece anlaşılmaz ve phpBB3 tarafından indekslenmeyen çok fazla genel terim içeriyor. Gelişmiş Arama içerisindeki daha fazla özellik ve mevcut seçenekleri kullanarak arama yapabilirsiniz.'
	),
	array(
		0 => 'Neden arama yaptığımda boş bir sayfa çıkıyor!?',
		1 => 'Aramanızda geri dönen çok fazla sonuç olduğu için web sunucusu meşgul oldu. Gelişmiş aramayı kullanın ve terimler içinde kullanılacak daha fazla özellik ile aranacak forumları belirleyin.'
	),
	array(
		0 => 'Üyeler için nasıl arama yaparım?',
		1 => '“Üyeler” sayfasına gidin ve “Bir üye bul” linkine tıklayın. Buradan, açıklanan seçenekleri doldurun.'
	),
	array(
		0 => 'Kendi mesajlarımı ve başlıklarımı nasıl bulabilirim?',
		1 => 'Kendi mesajlarınızı, Kullanıcı Kontrol Panelinden “Kullanıcı’nın mesajlarını ara” linkine tıklayarak ya da kendi profil sayfanızdan bulabilirsiniz. Başlıklarınızı aramak için, Gelişmiş arama sayfasını kullanın ve var olan uygun seçenekleri doldurun.'
	),
	array(
		0 => '--',
		1 => 'Başlık Abonelikleri ve Yer imleri'
	),
	array(
		0 => 'Yer imi ve abonelik arasındaki fark nedir?',
		1 => 'phpBB3’teki yer imleri, hemen hemen web tarayıcınızdaki yer imleri gibidir. Bir güncelleme olduğu zaman bildiri almayacaksınız, fakat başlığa daha sonra geri dönebilirsiniz. Abonelikte, farklı olarak abonelik için tercih ettiğiniz metot ya da metotlar sayesinde sitedeki forum veya başlıklarda bir güncelleme olduğu zaman bildiri alırsınız.'
	),
	array(
		0 => 'Belirli forumlara ya da başlıklara nasıl abone olurum?',
		1 => 'Belirli bir foruma abone olmak için, herhangi bir foruma girdiğinizde, “Foruma abone ol” bağlantısı göreceksiniz. Bir başlığa abone olmak için, başlığa cevap verirken abonelik kutusunu işaretleyin ya da başlığın içindeki “Başlığa abone ol” bağlantısını tıklayın.'
	),
	array(
		0 => 'Aboneliklerimi nasıl silerim?',
		1 => 'Aboneliklerinizi, Kullanıcı Kontrol Panelinize giderek ve abonelikleriniz için bağlantıları takip ederek silebilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Eklentiler'
	),
	array(
		0 => 'Bu sitede ne eklentilerine izin veriliyor?',
		1 => 'Her site yöneticisi bazı eklenti tiplerine izin verebilir ya da izin vermeyebilir. Eğer nelerin yüklenmesine izin verildiğinden şüpheliyseniz, yardım için site yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Tüm eklentilerimi nasıl bulurum?',
		1 => 'Yüklediğiniz eklentilerin listesini bulmak için, Kullanıcı Kontrol Panelinize gidin ve eklentiler kısmındaki bağlantıları takip edin.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 Konuları'
	),
	array(
		0 => 'Bu mesaj panosunu kim yazdı?',
		1 => 'Bu yazılım (değiştirilmemiş haliyle) <a href="http://www.phpbb.com/">phpBB Group</a> tarafından üretilmiş ve genel dağıtıma çıkarılmıştır. Tüm eser hakları phpBB Group\'a aittir. Bu eser, GNU General Public License antlaşması altında sunulmuştur. Bu antlaşmaya uyma şartıyla ücretsiz dağıtılabilir. Daha detaylı bilgiler için bağlantıya göz atın.'
	),
	array(
		0 => 'Aradığım X özellik neden yok?',
		1 => 'Bu yazılım phpBB Group tarafından yazılmış ve dağıtıma çıkarılmıştır. Eğer herhangi bir özelliğin eksik olduğunu düşünüyorsanız, lütfen phpbb.com sitesini ziyaret edip phpBB Group\'un ilgili düşüncelerini öğrenin. Lütfen phpbb.com sitesindeki forumlara yazıp yeni bir özellik isteğinde bulunmayın. phpbb Group SourceForge aracılığıyla yeni özellikler ekler. Lütfen ilgili forumları gezip ilk önce phpBB Group\'un herhangi bir özellikle ilgili tutumunu öğrenin ve daha sonra burada tarif edilen yöntemle başvuruda bulunun.'
	),
	array(
		0 => 'Bu siteyle ilgili hukuki sorunlar için veya suistimal durumlarda kime başvurabilirim?',
		1 => '“Takım” sayfasında listelenmiş yöneticilerin herhangi biri ile şikayetleriniz için iletişime geçebilirsiniz. Eğer onlardan cevap alamıyorsanız, o zaman alan adının sahibi ile (bir <a href="http://www.google.com/search?q=whois">whois sorgulaması</a> yaparak) ya da, eğer bu site ücretsiz bir serviste çalışıyorsa (ör. Yahoo!, free.fr, f2s.com, v.b.), bu servisin yönetimi veya suistimal konularla ilgilenen bölümüyle iletişime geçmelisiniz. Not: phpBB Grubu, bu mesaj panosunun nasıl, nerede ve kimler tarafından kullanıldığı konusunda bir bilgisi olmadığı için <strong>kesinlikle yargılanamaz</strong> ve her ne olursa olsun sorumlu tutulamaz. phpBB.com sitesiyle veya phpBB yazılımıyla <strong>doğrudan ilgisi olmayan</strong> herhangi bir hukuki konuda (ihtiyati tedbir, mali sorumluluk, iftira vs.) phpBB Grubu ile iletişime geçmeyin. Bu yazılımın herhangi <strong>üçüncü şahıslar tarafından kullanımıyla ilgili</strong> phpBB Group\'a e-posta gönderirseniz, ya çok kısa bir cevap alırsınız ya da hiç bir cevap alamazsınız.'
	)
);

?>