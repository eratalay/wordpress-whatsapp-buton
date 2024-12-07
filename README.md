# wordpress-whatsapp-buton
Ücretsiz Wordpress Whatsapp Buton Eklentisi

# Whatsapp Buton WordPress Eklentisi

WordPress için ücretsiz, özelleştirilebilir bir WhatsApp butonu eklentisi. Sitenizin alt köşesine yerleştirilen bu buton, ziyaretçilerin doğrudan WhatsApp üzerinden sizinle iletişim kurmasını sağlar.

## Özellikler

- **Kolay Ayarlar:** WhatsApp numarasını, konumunu ve görünürlüğünü ayarlayabilirsiniz.
- **Mobil ve Masaüstü Uyumlu:** Tüm cihazlarda sorunsuz çalışır.
- **Hafif ve Hızlı:** Performansı etkilemeden kolayca entegre edilir.

---

## Kurulum

1. **Eklentiyi İndir:**
   - [Whatsapp Buton GitHub Sayfası](https://github.com/eratalay/wordpress-whatsapp-buton)
2. **Yükleme:**
   - WordPress panelinde **Eklentiler > Yeni Ekle** seçeneğine gidin.
   - **Eklenti Yükle** seçeneğinden `whatsapp-button.zip` dosyasını yükleyin.
   - Eklentiyi etkinleştirin.
3. **Ayarları Yapılandır:**
   - WordPress panelindeki **Ayarlar > Whatsapp Buton** sayfasına gidin.

---

## Kullanım

### Ayarlar

#### 1. **WhatsApp Numarası**
   - "+90" ön eki otomatik olarak eklenmiştir.
   - Sadece numaranızı girin (örneğin: `+901234567890`).

#### 2. **Konum**
   - Butonun sitenin sol veya sağ alt köşesinde görünmesini seçebilirsiniz.

#### 3. **Görünürlük**
   - Butonu dilediğiniz zaman göster/gizle seçeneğiyle kontrol edebilirsiniz.

### Örnek Ayarlar
| Ayar                 | Örnek Değer       |
|----------------------|-------------------|
| WhatsApp Numarası   | `+905555555555`   |
| Konum               | Sağ Alt           |
| Butonu Göster       | Evet              |

---

## Teknik Detaylar

### Buton Konumu
Buton, CSS kullanılarak sabit bir şekilde sayfanın alt köşesine yerleştirilmiştir. Konumu, ayarlardan "sol" veya "sağ" olarak seçilebilir:

- Sol konum: `left: 20px;`
- Sağ konum: `right: 20px;`

### Görselleştirme
Buton arka planı WhatsApp'ın marka rengi olan `#25d366` ile renklendirilmiştir ve 3D görünümü için hafif bir gölge eklenmiştir.

---

## Geliştirici Bilgileri

- **Geliştirici:** Mustafa Eratalay
- **GitHub:** [@eratalay](https://github.com/eratalay)
- **Proje URL:** [Whatsapp Buton](https://github.com/eratalay/wordpress-whatsapp-buton)

---

Eklentiyle ilgili herhangi bir sorunuz veya geri bildiriminiz varsa lütfen GitHub üzerinden iletişime geçin!

