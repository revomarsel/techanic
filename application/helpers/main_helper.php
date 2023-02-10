<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('formatted_date')) {
    function formatted_date($timestamp, $format = "d/m/Y - H:i"){
        return date($format, strtotime($timestamp));
    }
}

if (!function_exists('wa_link')) {
    function wa_link(){
        return "https://web.whatsapp.com/send?phone=+6281233236569&text=Hallo%20Techanic,%20saya%20ingin%20menanyakan%20perihal%20Techanic%20Business";
    }
}

if (!function_exists('formatted_date_indo')) {
    function formatted_date_indo($date){
    	$date = formatted_date($date,"Y-m-d");
		$month = array (
			1 =>   
			'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);

		$array = explode('-', $date);
		return $array[2] . ' ' . $month[ (int)$array[1] ] . ' ' . $array[0];
	}
}

if (!function_exists('clean_str')) {
    function clean_str($str)
    {
        $ci =& get_instance();
        $str = $ci->security->xss_clean($str);
        $str = remove_special_characters($str, false);
        return $str;
    }
}

if (!function_exists('remove_special_characters')) {
    function remove_special_characters($str, $is_slug = false)
    {

        $str = trim($str);

        $str = str_replace('#', '', $str);

        $str = str_replace(';', '', $str);

        $str = str_replace('!', '', $str);

        $str = str_replace('"', '', $str);

        $str = str_replace('$', '', $str);

        $str = str_replace('%', '', $str);

        $str = str_replace('(', '', $str);

        $str = str_replace(')', '', $str);

        $str = str_replace('*', '', $str);

        $str = str_replace('+', '', $str);

        $str = str_replace('/', '', $str);

        $str = str_replace('\'', '', $str);

        $str = str_replace('<', '', $str);

        $str = str_replace('>', '', $str);

        $str = str_replace('=', '', $str);

        $str = str_replace('?', '', $str);

        $str = str_replace('[', '', $str);

        $str = str_replace(']', '', $str);

        $str = str_replace('\\', '', $str);

        $str = str_replace('^', '', $str);

        $str = str_replace('`', '', $str);

        $str = str_replace('{', '', $str);

        $str = str_replace('}', '', $str);

        $str = str_replace('|', '', $str);

        $str = str_replace('~', '', $str);

        if ($is_slug == true) {

            $str = str_replace(" ", '-', $str);

            $str = str_replace("'", '', $str);

        }

        return $str;
    }
}

if (!function_exists('trans')) {
    function trans($type,$num = 0)
    {
        $ci =& get_instance();
        $lang = $ci->input->get('lang',true);
        if($type == 'text_1'){
            if($lang == 'en-id'){
                return 'Building Small Habits <br>
                Positive Impacts in<br>
                Next Generation';
            }else{
                return 'Membangun Pembiasaan Kecil <br>
                Memberi Dampak Positif di<br>
                Generasi Selanjutnya ';
            }
        }

        if($type == 'text_2'){
            if($lang == 'en-id'){
                return '<b>Techanic</b> is committed to delivering solutions and contributions <br>
against the issue of electronic waste crisis';
            }else{
                return '<b>Techanic</b> berkomitmen memberikan solusi dan kontribusi <br>
                terhadap isu krisis sampah elektronik';
            }
        }
        
        if($type == 'text_3'){
            if($lang == 'en-id'){
                return 'Let’s take part in the recovery & update process.' ;
            }else{
                return 'Mari ambil bagian dalam proses pemulihan & pembaruan.';
            }
        }
        
        if($type == 'text_4'){
            if($lang == 'en-id'){
                return 'FIND OUT WHAT HAPPENED TO OUR EARTH' ;
            }else{
                return 'CARI TAU APA YANG TERJADI PADA BUMI KITA';
            }
        }
        
        if($type == 'text_5'){
            if($lang == 'en-id'){
                return 'Techanic <br> Building Long-Term Solutions';
            }else{
                return 'Bersama Techanic <br> Membangun Solusi Jangka Panjang';
            }
        }
        
        if($type == 'text_6'){
            if($lang == 'en-id'){
                return 'Education Importance of Sustainability';
            }else{
                return 'Edukasi Pentingnya Sustainability';
            }
        }
        
        if($type == 'text_7'){
            if($lang == 'en-id'){
                return 'Use the device and fix it up to the recommended lifetime limit. <br><br>If the device is not usable anymore, <br><br> follow the program and the electronic waste management initiative responsibly';
            }else{
                return 'Gunakan perangkat dan perbaiki hingga batas masa pakai yang dianjurkan. <br><br>Jika perangkat tidak dapat digunakan lagi, <br><br> ikuti program dan inisiatif pengelolaan sampah elektronik secara bertanggung jawab';
            }
        }

        if($type == 'text_8'){
            if($lang == 'en-id'){
                return 'MyTechanic Platform Supports Sustainability';
            }else{
                return 'Platform MyTechanic Mendukung Sustainability';
            }
        }
        
        if($type == 'text_9'){
            if($lang == 'en-id'){
                return 'This app makes it easy for customers to find <b> trusted service place.</b> <br><br> History of transactions stored digitally for warranty claims needs, it is expected that users can use the device with long duration';
            }else{
                return 'Aplikasi ini memudahkan customer dalam menemukan <b>tempat service terpercaya.</b>  <br><br> Histori transaksi tersimpan secara digital untuk kebutuhan klaim garansi, diharapkan pengguna bisa menggunakan perangkat dengan durasi panjang ';
            }
        }
        
        if($type == 'text_10'){
            if($lang == 'en-id'){
                return 'Improve the Quality of Reparation Industry';
            }else{
                return 'Meningkatkan Kualitas Industri Reparasi';
            }
        }
        
        if($type == 'text_11'){
            if($lang == 'en-id'){
                return 'Platform <b>Techanic Business</b> helps technicians and business owners repair in the habit of serving efficiently and professionally. <br> <br> It is expected that trust increases in the eyes of customers keep the business growing according to target';
            }else{
                return 'Platform <b>Techanic Business</b> membantu teknisi dan pemilik usaha reparasi dalam pembiasaan melayani secara efesien dan profesional. <br> <br> Diharapkan kepercayaan meningkat dimata customer membuat usaha terus berkembang sesuai target';
            }
        }

        if($type == 'text_12'){
            if($lang == 'en-id'){
                return 'Yess, we succeed !';
            }else{
                return 'Yess, Kita Berhasil !';
            }
        }

        if($type == 'text_13'){
            if($lang == 'en-id'){
                return 'Building sustainable long-term solutions to address <br><b> electronic waste problem</b> <br> in an effort to maintain the environment, <br><br> as well as advance small and medium enterprises in the field of reparation.' ;
            }else{
                return 'Membangun solusi jangka panjang yang berkelanjutan untuk mengatasi <br><b>masalah limbah elektronik</b> <br> dalam upaya menjaga lingkungan, <br><br> serta memajukan usaha kecil dan menengah di bidang reparasi.';
            }
        }

        if($type == 'text_14'){
            if($lang == 'en-id'){
                return 'Techanic Product';
            }else{
                return 'Produk Techanic';
            }
        }

        if($type == 'text_15'){
            if($lang == 'en-id'){
                return 'Latest Repair Ecosystem, Transactions Walk Easier & Efficient';
            }else{
                return 'Ekosistem Perbaikan Masa Kini, Transaksi Berjalan Lebih Mudah & Efisien';
            }
        }

        if($type == 'text_16'){
            if($lang == 'en-id'){
                return' MyTechanic is a marketplace service service platform intended
                easy search for repair places and equipped also <br><b> feature tracking order</b>, to save transaction history for <br> <b> warranty claims</b>';
            }else{
                return 'MyTechanic sebuah marketplace platform jasa service reparasi bertujuan
                memudahkan pencarian tempat reparasi dan dilengkapi juga  <br><b>fitur tracking order</b>, hingga menyimpan histori transaksi untuk keperluan <br> <b>klaim garansi</b>';
            }
        }

        if($type == 'text_17'){
            if($lang == 'en-id'){
                return 'Learn More';
            }else{
                return 'Pelajari Lebih Lanjut';
            }
        }

        if($type == 'text_18'){
            if($lang == 'en-id'){
                return 'Mobile-based repair business management application, business owners and technicians can manage the work more efficiently and regularly. <br><br> Equipped with progress monitoring feature serves to ensure the work is completed on time and in accordance with customer‘s expectations';
            }else{
                return 'Aplikasi manajemen usaha reparasi berbasis mobile, pemilik usaha dan teknisi dapat mengelola pekerjaan lebih efisien dan teratur. <br><br> Dilengkapi fitur pemantauan progress berfungsi memastikan pekerjaan selesai tepat waktu dan sesuai dengan harapan pelanggan';
            }
        }
        
        if($type == 'text_19'){
            if($lang == 'en-id'){
                return 'Building sustainable long-term solutions to address electronic waste problems and advance small and medium-sized businesses in the field of reparation, <br> and maintaining the environment for future generations';
            }else{
                return 'Membangun solusi jangka panjang yang berkelanjutan untuk mengatasi masalah limbah elektronik dan memajukan  usaha kecil dan menengah di bidang reparasi,<br> serta menjaga lingkungan untuk generasi mendatang';
            }
        }
        
        if($type == 'text_20'){
            if($lang == 'en-id'){
                return 'Many Things We Don’t Know <br> As Technology Users';
            }else{
                return 'Banyak Hal Yang Tidak Kita Sadari <br> Sebagai Pengguna Teknologi';
            }
        }

        if($type == 'text_21'){
            if($lang == 'en-id'){
                return 'Consumption Cycle <br> Technology Users';
            }else{
                return 'Siklus Konsumtif <br> Pengguna Teknologi';
            }
        }
        
        if($type == 'text_22'){
            if($lang == 'en-id'){
                return 'Fast-Evolving Technology';
            }else{
                return 'Teknologi Berkembang Pesat';
            }
        }
        
        if($type == 'text_23'){
            if($lang == 'en-id'){
                return 'Demand & need for technology upgrades has been increasing in the last 20 years';
            }else{
                return 'Permintaan & kebutuhan akan upgrade teknologi terus meningkat dalam 20 tahun terakhir';
            }
        }
        
        if($type == 'text_24'){
            if($lang == 'en-id'){
                return 'Impulsive Trend <br> From Society';
            }else{
                return 'Sifat Impulsif <br> Dari Masyarakat';
            }
        }

        if($type == 'text_25'){
            if($lang == 'en-id'){
                return 'People tend to buy new devices only to follow trends regardless of the recommended lifespan';
            }else{
                return 'Masyarakat Cenderung membeli  perangkat baru hanya untuk mengikuti trend tanpa mempedulikan masa usia pakai yang dianjurkan';
            }
        }

        if($type == 'text_26'){
            if($lang == 'en-id'){
                return 'Cause of the Surge <br> Electronic waste';
            }else{
                return 'Akibat Lonjakan <br> Limbah elektronik';
            }
        }

        if($type == 'text_27'){
            if($lang == 'en-id'){
                return 'Global E-Waste Monitor’ released by the United Nations, the number of electronic waste increases by 4.4 million tons annually';
            }else{
                return 'Riset Global E-Waste Monitor yang dirilis oleh Perserikatan Bangsa-Bangsa (PBB), Jumlah limbah elektronik meningkat rata rata 4,4 juta ton setiap tahunnya';
            }
        }
        
        if($type == 'text_28'){
            if($lang == 'en-id'){
                return 'Sustainability <br> Is Smart Solutions';
            }else{
                return 'Sustainability <br> Adalah Solusi Cerdas';
            }
        }

        if($type == 'text_29'){
            if($lang == 'en-id'){
                return' Many Brand Technology supports software upgrades & spareparts to support sustainability,
As well as other impacts & solutions related to electronic waste into discussion in word economic forum';
            }else{
                return 'Banyak Brand teknologi menunjang upgrade software & sparepart untuk mendukung sustainability, 
                Serta dampak & solusi lainnya terkait sampah elektronik Menjadi Pembahasan dalam word economic forum';
            }
        }
        
        if($type == 'text_30'){
            if($lang == 'en-id'){
                return 'Which Try Us <br> Build In TECHANIC';
            }else{
                return 'Yang Coba Kami <br> Bangun Dalam TECHANIC';
            }
        }
        
        if($type == 'text_31'){
            if($lang == 'en-id'){
                return 'MyTechanic Platform';
            }else{
                return 'Platform MyTechanic';
            }
        }
        
        if($type == 'text_32'){
            if($lang == 'en-id'){
                return' A marketplace service platform that bridges between customers who need service services with professionals who provide services. <br> <br> <br>
                It offers practical solutions for customers to find and order the services they need, without having to bother looking for one by one. Using the latest technology and intuitive design, the platform makes it easier for search and booking services so customers can find what they need quickly and easily.
                On the other hand, service marketplaces also help professionals reach more customers and improve their visibility. This allows them to promote their services and acquire new orders easily, thus helping to expand their business and achieve greater success. <br><br>
                By combining convenience for customers and professionals, the service marketplace helps to build a profitable ecosystem for all parties involved <br><br>';
            }else{
                return 'Sebuah marketplace platform Jasa Service Reparasi yang menjembatani antara pelanggan yang membutuhkan jasa service dengan para profesional yang menyediakan jasa tersebut. <br> <br>
                Ini menawarkan solusi praktis bagi pelanggan untuk menemukan dan memesan jasa yang mereka butuhkan, tanpa harus repot mencari satu per satu. Dengan menggunakan teknologi terkini dan desain yang intuitif, platform ini mempermudah proses pencarian dan pemesanan jasa, supaya pelanggan dapat menemukan apa yang mereka butuhkan dengan cepat dan mudah. <br> <br>
                Di sisi lain, marketplace jasa service juga membantu para profesional untuk menjangkau lebih banyak pelanggan dan meningkatkan visibilitas mereka. Ini memungkinkan mereka untuk mempromosikan jasa mereka dan memperoleh pesanan baru dengan mudah, sehingga membantu memperluas bisnis mereka dan mencapai sukses yang lebih besar. <br><br>
                Dengan menggabungkan kemudahan bagi pelanggan dan profesional, marketplace jasa service membantu untuk membangun ekosistem yang menguntungkan bagi semua pihak yang terlibat <br><br>';
            }
        }
        
        if($type == 'text_33'){
            if($lang == 'en-id'){
                return 'Go Digital for Indonesia Reparation Industry';
            }else{
                return 'Go Digital untuk Industri Reparasi Indonesia';
            }
        }
        
        if($type == 'text_34'){
            if($lang == 'en-id'){
                return 'Techanic Business is a business owner management application engaged in repair business. Available for android and ios, business owners and technicians can manage their work more efficiently and regularly. <br><br>

                The app provides progress monitoring features, and job reports, which help technicians to achieve better job results. This feature also facilitates communication between technician and customer, thus ensuring that the work is completed on time and in accordance with customer expectations. <br><br>

                Features like digital invoicing are another very important feature. This feature allows technicians to manage invoices and payments digitally, making the payment process easier, it helps to reduce the risk of errors and ensure that payments are timely and according to the amount they should. <br><br>
                By combining mobile application and digital invoicing,
                ensure their business run smoothly and business owners can implement <b> system no invoice, free service
                </b>';
            }else{
                return 'Techanic Business adalah aplikasi manajemen pemilik usaha yang bergerak dalam usaha reparasi. Tersedia untuk android dan ios, pemilik usaha dan teknisi dapat mengelola pekerjaan mereka dengan lebih efisien dan teratur. <br><br>

                Aplikasi ini memberikan fitur pemantauan progress, dan laporan pekerjaan, yang membantu teknisi untuk mencapai hasil pekerjaan yang lebih baik. Fitur ini juga mempermudah komunikasi antara teknisi dan pelanggan, sehingga memastikan bahwa pekerjaan selesai tepat waktu dan sesuai dengan harapan pelanggan. <br><br>

                Fitur seperti digital invoicing adalah fitur lain yang sangat penting. Fitur ini memungkinkan teknisi untuk mengelola faktur dan pembayaran secara digital, membuat proses pembayaran menjadi lebih mudah, hal Ini membantu untuk mengurangi risiko kesalahan dan memastikan bahwa pembayaran tepat waktu dan sesuai dengan jumlah yang seharusnya. <br><br>
                Dengan menggabungkan mobile application dan digital invoicing, 
                memastikan bisnis mereka berjalan dengan lancar dan pemilik usaha bisa menerapkan <b> sistem no invoice, free service
                </b>';   
            }
        }

        if($type == 'text_35'){
            if($lang == 'en-id'){
                return 'Techanic digital platform ecosystem for SME electronic repair business is designed to improve sustainability and operational efficiency.' ;
            }else{
                return 'Ekosistem platform digital Techanic untuk bisnis perbaikan elektronik SME dirancang untuk meningkatkan keberlanjutan dan efisiensi operasional.';   
            }
        }
        
        if($type == 'text_36'){
            if($lang == 'en-id'){
                return "Using the latest technology, our platform makes it easier to monitor and manage repairs for technicians, thus minimizing environmental impact." ;
            }else{
                return 'Dengan menggunakan teknologi terkini, platform kami mempermudah pemantauan dan pengelolaan perbaikan untuk teknisi, sehingga meminimalkan dampak lingkungan.';   
            }
        }

        if($type == 'text_37'){
            if($lang == 'en-id'){
                "our Return Solutions enables improvement businesses to implement more responsible practices and make a positive difference to the environment. With us on our mission to drive positive changes in the industry." ;
            }else{
                return 'Solusi kami memampukan bisnis perbaikan untuk menerapkan praktik-praktik yang lebih bertanggung jawab dan membuat perbedaan positif bagi lingkungan. Bersama kami dalam misi memacu perubahan positif di industri ini.';   
            }
        }
        
        if($type == 'text_38'){
            if($lang == 'en-id'){
                return 'Be Part of TECHANIC
                    Building <span class=Memred-indonesia >Indonesia</span> More
                    Clean From Electronic Waste';
            }else{
                return 'Jadilah Bagian Dari TECHANIC 
                Membangun <span class="red-indonesia">Indonesia</span> Lebih
                Bersih Dari Limbah Elektronik';   
            }
        }
        
        if($type == 'text_39'){
            if($lang == 'en-id'){
                return 'Applications can be obtained through :';
            }else{
                return 'Aplikasi bisa didapatkan melalui :';   
            }
        }
        
        if($type == 'text_40'){
            if($lang == 'en-id'){
                return 'Open Web Apps';
            }else{
                return 'Buka Aplikasi Web';   
            }
        }
        
        if($type == 'text_41'){
            if($lang == 'en-id'){
                return "TECHANIC Team <br> Ready to Provide You Solution";
            }else{
                return 'Tim TECHANIC <br> Siap Memberikan Anda Solusi';   
            }
        }
        
        if($type == 'text_42'){
            if($lang == 'en-id'){
                return "Connect to Team";
            }else{
                return 'Hubungkan Ke Tim';   
            }
        }
        
        if($type == 'text_43'){
            if($lang == 'en-id'){
                return "Don't Confuse <br>
                Find a Trusted Service Place!";
            }else{
                return 'Jangan Bingung <br>
                Cari Tempat Service Terpercaya !';   
            }
        }

        if($type == 'text_44'){
            if($lang == 'en-id'){
                return "MyTechanic, Platform easy to find location <br> repair place with job standard <br>
                professional and Warranty 👍";
            }else{
                return 'MyTechanic, Platform mudah mencari lokasi <br> tempat reparasi dengan standar pekerjaan <br>
                profesional dan bergaransi 👍';   
            }
        }

        if($type == 'text_45'){
            if($lang == 'en-id'){
                return "1000+ Reparation Places";
            }else{
                return '1000+ Tempat Reparasi';   
            }
        }
        
        if($type == 'text_46'){
            if($lang == 'en-id'){
                return "Many Reparation Categories Available!";
            }else{
                return "Banyak Kategori Reparasi Tersedia!" ;
            }
        }

        if($type == 'text_47'){
            if($lang == 'en-id'){
                return 'Mobile & Tablet';
            }else{
                return 'Handphone & Tablet';   
            }
        }

        if($type == 'text_48'){
            if($lang == 'en-id'){
                return 'Computer & Laptop';
            }else{
                return 'Komputer & Laptop';   
            }
        }

        if($type == 'text_49'){
            if($lang == 'en-id'){
                return 'Air Conditioner (AC)';  
            }else{
                return 'Air Conditioner (AC)';   
            }
        }

        if($type == 'text_50'){
            if($lang == 'en-id'){
                return 'Automotive';
            }else{
                return 'Otomotif';   
            }
        }

        if($type == 'text_51'){
            if($lang == 'en-id'){
                return "Household Equipment";
            }else{
                return "Peralatan Rumah Tangga";
            }
        }
            
            if($type == "text_52"){
            if($lang == "en-id"){
            return "Other Service Categories...";
            }else{
            return "Kategori Service Lainnya...";
            }
            }
            
            if($type == "text__52"){
            if($lang == "en-id"){
            return "Do Not hesitate To <br> Maintain Old Devices";
            }else{
            return "Jangan Ragu Untuk <br>  Mempertahankan Perangkat Lama";
            }
            }
            
            if($type == "text_53"){
                if($lang == "en-id"){
                    return "Any type of repair can be found in the application <br> <b>MyTechanic</b>. must be done by experts and experienced.";
                    }else{
                    return "Segala jenis tempat reparasi dapat di cari di aplikasi <br> <b>MyTechanic</b>. pasti dikerjakan tenaga ahli dan berpengalaman.";
                }
            }
                
                if($type == "text_54"){
                if($lang == "en-id"){
                return "Find the nearest location";
                }else{
                return "Cari Lokasi Terdekat";
                }
                }
                
                if($type == "text_55"){
                if($lang == "en-id"){
                return "Gallery";
                }else{
                return "Gallery Bersama";
                }
                }
                
                if($type == "text_56"){
                    if($num === 1){
                        if($lang == "en-id"){
                        return "Service Centers and Customer <br> Documentation service that has been using Techanic services";
                        }else{
                        return "Dokumentasi service center dan customer <br> yang telah menggunakan layanan Techanic";
                        }
                    }

                    if($num === 2){
                        if($lang == "en-id"){
                            return "TESTIMONIALS";
                            }else{
                            return "APA YANG MEREKA KATAKAN";
                            }
                    }
                }
                
                if($type == "text_57"){
                    if($lang == "en-id"){
                    return "Client Satisfied With Service <br>
                    MyTechanic & Techanic Business";
                    }else{
                    return "Client puas dengan layanan <br>
                            MyTechanic & Techanic Business";
                    }
                }
                
                if($type == "text_58"){
                if($lang == "en-id"){
                return "Service Business";
                }else{
                return "Usaha Service";
                }
                }
                
                if($type == "text_59"){
                if($lang == "en-id"){
                return "he team is getting solid after the Techanic app 👏";
                }else{
                return "“Tim semakin solid setelah pakai aplikasi Techanic 👏”";
                }
                }
                
                if($type == "text_60"){
                if($lang == "en-id"){
                    return "Catherine<br>
                    <b>PT. DR GADGET INDONESIA</b>";
                }else{
                return "Catherine<br>
                <b>PT. DR GADGET INDONESIA</b>";
                }
                }
                
                if($type == "text_61"){
                if($lang == "en-id"){
                    return "Users since 2022";
                }else{
                return "Pengguna sejak 2022";
                }
                }
                
                if($type == "text_62"){
                if($lang == "en-id"){
                return "Customer";
                }else{
                return "Customer";
                }
                }
                
                if($type == "text_63"){
                if($lang == "en-id"){
                return "“So it’s easy to find the services! Anyway Joss!”";
                }else{
                return "“Jadi Mudah nyari tempat services! Pokoknya joss!”";
                }
                }
                
                if($type == "text_64"){
                if($lang == "en-id"){
                return "Maya";
                }else{
                return "Maya";
                }
                }
                
                if($type == "text_65"){
                if($lang == "en-id"){
                return "Users since 2022";
                }else{
                return "Pengguna sejak 2022";
                }
                }
                
                if($type == "text_66"){
                if($lang == "en-id"){
                return "We Pioneer! Developing <br>
                Indonesia Reparation Industry";
                }else{
                return "Kita Pionir ! Mengembangkan <br>
                Industri Reparasi Indonesia";
                }
                }
                
                if($type == "text_67"){
                if($lang == "en-id"){
                return "Business performance checks do not need to come to the store every day.";
                }else{
                return "Cek performa usaha tidak perlu datang ke toko setiap hari.";
                }
                }
                
                if($type == "text_68"){
                if($lang == "en-id"){
                return "Manage Many Shop";
                }else{
                return "Kelola Banyak Cabang";
                }
                }
                
                if($type == "text_69"){
                if($lang == "en-id"){
                return "Dashboard Owner";
                }else{
                return "Dashboard Owner";
                }
                }
                
                if($type == "text_70"){
                if($lang == "en-id"){
                return "QR Smart System";
                }else{
                return "QR Smart System";
                }
                }
                
                if($type == "text_71"){
                if($lang == "en-id"){
                return "Manage Employees";
                }else{
                return "Kelola Karyawan";
                }
                }
                
                if($type == "text_72"){
                if($lang == "en-id"){
                return "Employee Performance Check";
                }else{
                return "Cek Prestasi Karyawan";
                }
                }
                
                if($type == "text_73"){
                if($lang == "en-id"){
                return "Business Performance Analysis";
                }else{
                return "Analisa Performa Usaha";
                }
                }
                
                if($type == "text_74"){
                if($lang == "en-id"){
                return "And dozens of other executive features...";
                }else{
                return "Dan puluhan fitur eksekutif lainnya...";
                }
                }
                
                if($type == "text_75"){
                if($lang == "en-id"){
                return "<b>1000+ Reparation Business</b> <br>
                Easy to find MyTechanic Customer";
                }else{
                return "<b>1000+ Usaha Reparasi</b> <br>
                Mudah Ditemukan Customer MyTechanic";
                }
                }
                
                if($type == "text__75"){
                if($lang == "en-id"){
                return "Register My Business";
                }else{
                return "Daftarkan Usaha Saya ";
                }
                }
                
                if($type == "text_76"){
                if($lang == "en-id"){
                return "Technician Platform Update <br>
                Team Working Neat & Solid";
                }else{
                return "Pembaruan Platform Teknisi <br>
                Kerja Tim Lebih Rapi & Solid";
                }
                }
                
                if($type == "text_77"){
                if($lang == "en-id"){
                return "QC checklist";
                }else{
                return "Checklist QC";
                }
                }
                
                if($type == "text_78"){
                if($lang == "en-id"){
                return "Service Order";
                }else{
                return "Service Order";
                }
                }
                
                if($type == "text_79"){
                if($lang == "en-id"){
                return "Collaboration";
                }else{
                return "Kolaborasi";
                }
                }
                
                if($type == "text_80"){
                if($lang == "en-id"){
                return "QR Invoice";
                }else{
                return "QR Invoice";
                }
                }
                
                if($type == "text_81"){
                if($lang == "en-id"){
                return "Split Payment";
                }else{
                return "Split Pembayaran";
                }
                }
                
                if($type == "text_82"){
                if($lang == "en-id"){
                return "SSO (Single Sign On)";
                }else{
                return "SSO (Single Sign On)";
                }
                }
                
                if($type == "text_83"){
                if($lang == "en-id"){
                return "Record Warranty";
                }else{
                return "Catat Garansi";
                }
                }
                
                if($type == "text_84"){
                if($lang == "en-id"){
                return "Notification By Wa";
                }else{
                return "Notifikasi By Wa";
                }
                }
                
                if($type == "text_85"){
                if($lang == "en-id"){
                return "Notification by Email";
                }else{
                return "Notifikasi By Email";
                }
                }
                
                if($type == "text_86"){
                if($lang == "en-id"){
                return "And other flagship features...";
                }else{
                return "Dan fitur unggulan lainya...";
                }
                }
                
                if($type == "text_87"){
                if($lang == "en-id"){
                return "<b>1000+ Technician Already</b> <br>
                Go digital with Techanic Business";
                }else{
                return "<b>1000+ Teknisi Sudah</b> <br>
                Go digital bersama Techanic Business";
                }
                }
                
                if($type == "text_88"){
                if($lang == "en-id"){
                return "Ask for Trial Application";
                }else{
                return "Minta Pelatihan Aplikasi";
                }
                }
                
                if($type == "text_89"){
                if($lang == "en-id"){
                return "Benefits to:";
                }else{
                return "Manfaat untuk :";
                }
                }
                
                if($type == "text_90"){
                if($lang == "en-id"){
                return "Customer";
                }else{
                return "Customer";
                }
                }
                
                if($type == "text_91"){
                if($lang == "en-id"){
                return "Entrepreneur";
                }else{
                return "Pengusaha";
                }
                }
                
                if($type == "text_92"){
                if($lang == "en-id"){
                return "Technician";
                }else{
                return "Teknisi";
                }
                }
                
                if($type == "text_93"){
                if($lang == "en-id"){
                return "MyTechanic Platform Customer";
                }else{
                return "MyTechanic Platform Customer";
                }
                }
                
                if($type == "text_94"){
                if($lang == "en-id"){
                return "Make Customers Easier Find Your Repair Store <br>
                in the feature <b>Marketplace MyTechanic.</b> <br>
                the tracking order feature also complements this application";
                }else{
                return "Buat customer lebih mudah mencari toko reparasi anda <br>
                dalam fitur <b>Marketplace MyTechanic.</b> <br> 
                fitur tracking order juga melengkapi aplikasi ini";
                }
                }
                
                if($type == "text_95"){
                if($lang == "en-id"){
                return "Check Customer Marketplace";
                }else{
                return "Cek Marketplace Pelanggan";
                }
                }
                
                if($type == "text_96"){
                if($lang == "en-id"){
                return "Increase";
                }else{
                return "Tingkatkan";
                }
                }
                
                if($type == "text_97"){
                if($lang == "en-id"){
                return "Techanic Business Precise Choice Develop <br>
                Your Reparation Business.";
                }else{
                return "Techanic Business Pilihan Tepat Kembangkan <br>
                Bisnis Reparasi anda.";
                }
                }
                
                if($type == "text_98"){
                if($lang == "en-id"){
                return "Register My Business";
                }else{
                return "Daftarkan Usaha Saya";
                }
                }
                
                if($type == "text_99"){
                if($lang == "en-id"){
                return "Features <br> and Services";
                }else{
                return "Fitur Unggulan <br> dan Layanan";
                }
                }
                
                if($type == "text_100"){
                if($lang == "en-id"){
                return "Dashboard and Statistics <br> Business Performance";
                }else{
                return "Dashboard dan Statistik <br> Performa Usaha";
                }
                }
                
                if($type == "text_101"){
                if($lang == "en-id"){
                return "Sales & <br> Cash Flow Report";
                }else{
                return "Laporan Penjualan & <br> Cash Flow";
                }
                }
                
                if($type == "text_102"){
                if($lang == "en-id"){
                return "Notification To <br> WhatsApp/Email";
                }else{
                return "Notifikasi Ke <br> WhatsApp / Email";
                }
                }
                
                if($type == "text_103"){
                if($lang == "en-id"){
                return "Smart QR System /<br> Smart Action QR";
                }else{
                return "Smart QR System /<br> Smart Action QR";
                }
                }
                
                if($type == "text_104"){
                if($lang == "en-id"){
                return "Quality Control";
                }else{
                return "Quality Control";
                }
                }
                
                if($type == "text_105"){
                if($lang == "en-id"){
                return "Push Notification";
                }else{
                return "Notifikasi Di Dalam <br> Aplikasi";
                }
                }
                
                if($type == "text_106"){
                if($lang == "en-id"){
                return "Service Tracking <br> Order";
                }else{
                return "Service Tracking <br> Order";
                }
                }
                
                if($type == "text_107"){
                if($lang == "en-id"){
                return "Record Warranty";
                }else{
                return "Catat Garansi";
                }
                }
                
                if($type == "text_108"){
                if($lang == "en-id"){
                return "Export Report To <br> Microsoft Excel";
                }else{
                return "Export Laporan Ke <br> Microsoft Excel";
                }
                }
                
                if($type == "text_109"){
                if($lang == "en-id"){
                return "Download Techanic Business For More Professional Services";
                }else{
                return "Unduh Techanic Business Untuk Pelayanan Yang Lebih Profesional";
                }
                }
                
                if($type == "text_110"){
                if($lang == "en-id"){
                return "Applications can be obtained through:";
                }else{
                return "Aplikasi bisa didapatkan melalui :";
                }
                }
                
                if($type == "text_111"){
                if($lang == "en-id"){
                return "Schedule Training <br> Now !";
                }else{
                return "Jadwalkan Pelatihan <br>  Sekarang !";
                }
                }                

                if($type == "text_112"){
                if($lang == "en-id"){
                return "Join us! <br> We Develop Helpful Products";
                }else{
                return "Bergabunglah bersama Kami ! <br> Kita Kembangkan Produk Yang Bermanfaat";
                }
                }     
                
            if($type == "text_113"){
                if($lang == "en-id"){
                return "Featured Products For Customers";
                }else{
                return "Produk Unggulan Untuk Customer";
                }
                }     


            if($type == "text_114"){
                if($lang == "en-id"){
                return "Easy search for a place of recovery, Tracking Order, Until it stores transaction history. <br> for now the MyTechanic platform is only available for the web";
                }else{
                return "Memudahkan pencarian tempat raparasi, Tracking Order, Hingga menyimpan histori transaksi. <br> untuk saat ini platform MyTechanic Hanya tersedia untuk web";
                }
                }     

            if($type == "text_115"){
                if($lang == "en-id"){
                return "Help Entrepreneurs and Technicians in Professional Services";
                }else{
                return "Membantu Pengusaha dan Teknisi dalam Pelayanan Profesional";
                }
                }     

                if($type == "text_116"){
                    if($lang == "en-id"){
                    return "Through Techanic Business, we are committed to creating an efficient and helpful way of working in business development.";
                    }else{
                    return "Melalui Techanic Business, Kita berkomitmen menciptakan cara kerja yang effesien dan membantu dalam pengembangan usaha.";
                    }
                    }     
                    if($type == "text_117"){
                        if($lang == "en-id"){
                        return "Join us! <br> We Develop Helpful Products";
                        }else{
                        return "Bergabunglah bersama Kami ! <br> Kita Kembangkan Produk Yang Bermanfaat";
                        }
                        }     
                        if($type == "text_118"){
                            if($lang == "en-id"){
                            return "Available position";
                            }else{
                            return "Posisi yang Tersedia";
                            }
                            }     if($type == "text_119"){
                                if($lang == "en-id"){
                                return "Send the biodata and the portfolio you need as you want.<br> We can’t wait for your contribution to the world of start up!";
                                }else{
                                return "Kirim biodata beserta portofolio yang dibutuhkan sesuai posisi yang Anda inginkan.<br> Kami sudah tidak sabar menunggu kontribusimu di dunia start up !";
                                }
                                }     
                                if($type == "text_120"){
                                    if($lang == "en-id"){
                                    return "Find out what to be <br> your difficulties";
                                    }else{
                                    return "Cari Tau Apa Yang Menjadi <br> Kesulitan Anda";
                                    }
                                }     
                                if($type == "text_121"){
                                    if($lang == "en-id"){
                                    return "Type here";
                                    }else{
                                    return "Ketik disini";
                                    }
                                }
                                if($type == "text_123"){
                                    if($lang == "en-id"){
                                    return "Most Often Asked <br> Client Techanic Business";
                                    }else{
                                    return "Paling Sering Ditanya <br> Client Techanic Business";
                                    }
                                }
                                if($type == "text_125"){
                                    if($lang == "en-id"){
                                    return "How to register an account to Techanic Business?";
                                    }else{
                                    return "Bagaimana cara mendaftar akun ke Techanic Business ?";
                                    }
                                }
                                if($type == "text_126"){
                                    if($lang == "en-id"){
                                    return "1. Make sure you download the app <b>Techanic Business</b> from the app store or play store <br>
                                    2. Open the app and enter your phone number, and then click on <br>
                                    3. Then enter the autp code that has been sent in whatsapp number <br>
                                    4. Continue registration by filling out the identity form <br>
                                    5. Create a new PIN <br>
                                    6. New PIN Confirmation <br>
                                    <b>Congratulations, you have successfully registered at Techanic Business</b>";
                                    }else{
                                    return "1. Pastikan sudah mendownload aplikasi <b>Techanic Business</b> dari app store ataupun play store <br>
                                    2. Buka aplikasinya dan masukkan nomor hp anda, lalu klik lanjut <br>
                                    3. Lalu masukkan kode otp yang yang telah dikirim di nomor whatsapp <br>
                                    4. Lanjutkan pendaftaran dengan mengisi form identitas <br>
                                    5. Buat PIN baru <br>
                                    6. Konfirmasi PIN baru <br>
                                    <b>Selamat, anda telah berhasil mendaftar di Techanic Business</b>";
                                    }
                                }
                                if($type == "text__126"){
                                    if($lang == "en-id"){
                                    return "What data should be filled in the initial setting?";
                                    }else{
                                    return "Data apa saja yang perlu diisi di setting awal?";
                                    }
                                }

                                if($type == "text_127"){
                                    if($lang == "en-id"){
                                    return "1. Prepare a Business Logo in hp/identity gallery for business profile photo <br>
                                    2. Enter business name <br>
                                    3. Business Email <br>
                                    4. Business Categories <br>
                                    5. Business Description <br>
                                    6. In the branch section is the information your business store runs <br>
                                    7. Fill in the name of the branch location <br>
                                    8. Address,can use map <br>
                                    9. Whatsapp Number <br>
                                    10. Office Number <br>
                                    11. Upload photo of business location / shop (image too big) <br>
                                    12. Then click Save <br>
                                    
                                    A popup will appear, <b> ’Do you want to add another branch ?’ </b> <br>
                                    If you have more than 1 branch, then press <b>Yes</b> <br>
                                    
                                    <b>Congratulations, you managed to register a business in techanic business.</b>";
                                    }else{
                                    return "1. Siapkan Logo usaha di galeri hp / identitas untuk foto profil usaha <br>
                                    2. Masukkan nama usaha <br>
                                    3. Email usaha <br>
                                    4. Kategori usaha <br>
                                    5. Deskripsi usaha <br>
                                    6. Pada bagian cabang adalah informasi toko usaha anda berjalan <br>
                                    7. Isi nama lokasi cabang <br>
                                    8. Alamat , bisa gunakan map <br>
                                    9. Nomor whatsapp <br>
                                    10. Nomor kantor <br>
                                    11. Upload foto lokasi usaha/toko (gambar terlalu besar) <br>
                                    12. Lalu klik simpan <br>

                                    Akan muncul popup, <b>“Apakah anda ingin menambah cabang lainnya ?”</b> <br>
                                    Jika anda memiliki lebih dari 1 cabang, maka tekan <b>Ya</b> <br>

                                    <b>Selamat, anda berhasil mendaftarkan usaha di techanic business.</b>";
                                    }
                                }
                                if($type == "text_128"){
                                    if($lang == "en-id"){
                                    return "How to Add Business Branch?";
                                    }else{
                                    return "Bagaimana Cara Menambahkan Cabang Usaha ?";
                                    }
                                }
                                if($type == "text_129"){
                                    if($lang == "en-id"){
                                    return "1. Sign in on the App, on the Home page, select settings <br>
                                    2. Select Business, then appear menu, select Branch list <br>
                                    3. Click the + button on the bottom right <br>
                                    4. Fill in name data / branch location <br>
                                    5. Enter the address <br>
                                    6. Fill in Whatsapp number <br>
                                    7. Fill in office number <br>
                                    8. If you activate, then your business will appear on my techanic <br> web
                                    9. Upload branch photo <br>
                                    10. Then click Save <br>
                                    
                                    <b>Both branches of business successfully stored</b>";
                                    }else{
                                    return "1. Masuk di App, di halaman Home, pilih setting <br>
                                    2. Pilih Usaha, lalu muncul menu, pilih list Cabang <br>
                                    3. Klik tombol + di kanan bawah <br>
                                    4. Isi data nama / lokasi cabang <br>
                                    5. Masukkan alamat <br>
                                    6. Isi nomor whatsapp <br>
                                    7. Isi nomor kantor <br>
                                    8. Jika anda aktifkan, maka usaha anda akan tampil di web my techanic <br>
                                    9. Upload foto cabang <br>
                                    10. Lalu klik Simpan <br>

                                    <b>Baik cabang usaha berhasil disimpan</b>";
                                    }
                                }
                                if($type == "text_130"){
                                    if($lang == "en-id"){
                                    return "How to make a transaction?";
                                    }else{
                                    return "Bagaimana cara membuat transaksi ?";
                                    }
                                }
                                if($type == "text_131"){
                                    if($lang == "en-id"){
                                    return "<li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    
                                    19. When all the required data is filled, click Start Work
                                    Confirm, Yes Start Work<br>
                                    
                                    <br><b>You are ready to work on device repair! </b><br><br>
                                    
                                    20. When the device is finished, log in to Summary Service, then click on Work<br>
                                    21. Click Create Invoice<br>
                                    22. If you warranty, select Yes, and enter the applicable warranty period<br>
                                    If not, Select no<br>
                                    If you already, click View Invoice<br>
                                    23. For customer payment, click Pay<br>
                                    <ul>
                                    <li>On the Payment Detail page, There are 5 payment methods (transfer, EDC, E-wallet, Cash, QRIS)</li>
                                    <li>Choose one method, for example: Cash</li>
                                    <li>Put nominal for repayment</li>
                                    <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    24. Invoice Payment is completed, click Finish <br>
                                    <b>Congratulations, you have completed 1 transaction at Techanic Business.</b> <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    
                                    19. When all the required data is filled, click Start Work
                                    Confirm, Yes Start Work<br>
                                    
                                    <br><b>You are ready to work on device repair! </b><br><br>
                                    
                                    20. When the device is finished, log in to Summary Service, then click on Work<br>
                                    21. Click Create Invoice<br>
                                    22. If you warranty, select Yes, and enter the applicable warranty period<br>
                                    If not, Select no<br>
                                    If you already, click View Invoice<br>
                                    23. For customer payment, click Pay<br>
                                    <ul>
                                    <li>On the Payment Detail page, There are 5 payment methods (transfer, EDC, E-wallet, Cash, QRIS)</li>
                                    <li>Choose one method, for example: Cash</li>
                                    <li>Put nominal for repayment</li>
                                    <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    24. Invoice Payment is completed, click Finish <br>
                                    <b>Congratulations, you have completed 1 transaction at Techanic Business.</b> <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    
                                    19. When all the required data is filled, click Start Work
                                    Confirm, Yes Start Work<br>
                                    
                                    <br><b>You are ready to work on device repair! </b><br><br>
                                    
                                    20. When the device is finished, log in to Summary Service, then click on Work<br>
                                    21. Click Create Invoice<br>
                                    22. If you warranty, select Yes, and enter the applicable warranty period<br>
                                    If not, Select no<br>
                                    If you already, click View Invoice<br>
                                    23. For customer payment, click Pay<br>
                                    <ul>
                                    <li>On the Payment Detail page, There are 5 payment methods (transfer, EDC, E-wallet, Cash, QRIS)</li>
                                    <li>Choose one method, for example: Cash</li>
                                    <li>Put nominal for repayment</li>
                                    <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    24. Invoice Payment is completed, click Finish <br>
                                    <b>Congratulations, you have completed 1 transaction at Techanic Business.</b> <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    
                                    19. When all the required data is filled, click Start Work
                                    Confirm, Yes Start Work<br>
                                    
                                    <br><b>You are ready to work on device repair! </b><br><br>
                                    
                                    20. When the device is finished, log in to Summary Service, then click on Work<br>
                                    21. Click Create Invoice<br>
                                    22. If you warranty, select Yes, and enter the applicable warranty period<br>
                                    If not, Select no<br>
                                    If you already, click View Invoice<br>
                                    23. For customer payment, click Pay<br>
                                    <ul>
                                    <li>On the Payment Detail page, There are 5 payment methods (transfer, EDC, E-wallet, Cash, QRIS)</li>
                                    <li>Choose one method, for example: Cash</li>
                                    <li>Put nominal for repayment</li>
                                    <li>Click enter</li>
                                    <li>If you already, click Process</li>
                                    </ul>
                                    24. Invoice Payment is completed, click Finish <br>
                                    <b>Congratulations, you have completed 1 transaction at Techanic Business.</b>";
                                    }else{
                                    return "1. Anda harus masuk sebagai teknisi, caranya yaitu:
                                    <ul>
                                        <li>Buka app, masukkan PIN, </li>
                                        <li>Ketika pilih tipe akun, pilih sebagai Teknisi/Pegawai</li>
                                        <li>Anda telah masuk di home Teknisi</li>
                                    </ul>

                                2. Jika anda sudah login sebagai Pemilik usaha, anda bisa pindah tipe akun dengan cara yaitu:<br>
                                <ul>
                                    <li>Klik pindah ke teknisi</li>
                                    <li>Muncul popup, pilih usaha anda</li>
                                    <li>Lalu pastikan cabang anda sudah benar, klik Menuju halaman teknisi</li>
                                    <li>Anda telah masuk di home Teknisi</li>
                                </ul>

                                3. Di bagian menu bawah, pilih Service<br>
                                4. Klik + untuk menambah service baru<br>
                                5. Pilih pelanggan anda, jika tidak ada, anda bisa menambah sebagai pelanggan baru<br>
                                <ul>
                                    <li>Masukkan nomor hp pelanggan pada kolom pencarian (cth: 81234)</li>
                                    <li>Klik tambah nomor tersebut</li>
                                    <li>Jika nomor tersebut adalah pelanggan baru, maka akan muncul Tambah pelanggan baru</li>
                                    <li>Pastikan nomor hp telah sesuai, lalu isi nama pelanggan anda</li>
                                    <li>Klik tambah</li>
                                </ul>
                                6. Pilih device, anda akan diarahkan ke halaman browse device<br>
                                <ul>
                                    <li>Jika list device tidak tersedia, pilih Manual</li>
                                    <li>Isi nama device</li>
                                    <li>Kategori device</li>
                                    <li>Pilih merk, jika tidak tersedia, pilih lainnya</li>
                                    <li>Pilihan checklist QC bersifat opsional</li>
                                    <li>Lalu klik tambah </li>
                                </ul>

                                7. Masukkan Serial Number device tersebut, jika tidak terlihat bisa diubah dengan nomor identitas lainnya <br>
                                8. Pilih kapasitas, jika tidak tersedia, pilih lainnya <br>
                                9. Pilih Warna, jika tidak tersedia, pilih -<br>
                                10. Pilih prioritas kerusakan<br>
                                11. Berikan keterangan tambahan<br>
                                12. Pilih kondisi device tersebut saat ini<br>
                                13. Apakah barang tersebut dititipkan kepada anda?<br>
                                14. Jika sudah, klik Simpan data service
                                <br><br>
                                Anda akan berada di halaman Summary Service, anda bisa scroll ke bagian bawah untuk mengisi detail selanjutnya.<br>
                                <br>
                                15. Tambah daftar kendala device tersebut, jika tidak tersedia, klik tambah manual.
                                <ul>
                                    <li>
                                        Isi nama kerusakan 
                                    </li>
                                    <li>
                                        Klik simpan
                                    </li>
                                    <li>
                                        Jika sudah, klik kembali
                                    </li>
                                </ul>
                                16. Tambah Jasa service, jika tidak tersedia, klik Tambah service manual
                                <ul>
                                    <li>Isi nama jasa service anda</li>
                                    <li>Isi biaya jasa anda</li>
                                    <li>Jika sudah, klik simpan</li>
                                </ul>
                                17. Tambah Spare Part, jika tidak tersedia, klik Tambah spare part manual
                                    <ul>
                                        <li>Isi nama sparepart</li>
                                        <li>Pilih warna yang tersedia</li>
                                        <li>Masukkan jumlah kuantitas sparepart yang dibutuhkan</li>
                                        <li>Jika sudah, klik Simpan</li>
                                    </ul> 
                                18. Tambah uang muka (DP) apabila diperlukan. Untuk menambah uang muka:
                                <ul>
                                    <li>Klik tambah item</li>
                                    <li>Terdapat 5 pilihan metode bayar (transfer, EDC, E-wallet, Tunai, QRIS)</li>
                                    <li>Pilih salah satu metode, contoh: Tunai</li>
                                    <li>Masukkan nominal</li>
                                    <li>Klik masukkan</li>
                                    <li>Jika sudah, klik Proses</li>
                                </ul>
                                
                                19. Ketika semua data yang dibutuhkan terisi, klik Mulai Bekerja
                                Konfirmasi, Ya mulai bekerja<br>

                                <br><b>Anda siap mengerjakan perbaikan device!</b><br><br>

                                20. Ketika device sudah selesai diperbaiki, masuk ke Summary Service, Lalu klik Selesai Bekerja<br>
                                21. Klik Buat Invoice<br>
                                22. Jika anda memberi garansi, pilih Ya, dan masukkan masa garansi yang berlaku<br>
                                Jika tidak, Pilih tidak<br>
                                Jika sudah, klik Lihat Invoice<br>
                                23. Untuk pembayaran pelanggan, klik Bayar<br>
                                <ul>
                                    <li>Di halaman Rincian pembayaran, Terdapat 5 pilihan metode bayar (transfer, EDC, E-wallet, Tunai, QRIS)</li>
                                    <li>Pilih salah satu metode, contoh: Tunai</li>
                                    <li>Masukkan nominal untuk pelunasan</li>
                                    <li>Klik masukkan</li>
                                    <li>Jika sudah, klik Proses</li>
                                </ul>   
                                24. Pembayaran invoice telah selesai, klik Selesai <br>
                                    <b>Selamat, anda telah menyelesaikan 1 transaksi di Techanic Business.</b>";
                                    }
                                }
                                if($type == "text_132"){
                                    if($lang == "en-id"){
                                    return "How to export reports into excel?";
                                    }else{
                                    return "Bagaimana cara export laporan kedalam excel ?";
                                    }
                                }
                                if($type == "text_133"){
                                    if($lang == "en-id"){
                                    return "1. Log in to the App, select as Business Owner
                                    2. In the bottom menu section, select Report
                                    3. Select Service Order
                                    4. On the top right, there is an icon for export, click the icon
                                    5. Popup Appear Save to excel,
                                    <ul>
                                    <li>Select the desired transaction period</li>
                                    <li>Select send by email</li>
                                    <li>Click send excel </li>
                                    </ul>
                                    <b>Congratulations, you have successfully sent an excel report</b>";
                                    }else{
                                    return " 1. Masuk ke App, pilih sebagai Pemilik Usaha
                                    2. Di Bagian menu bawah, pilih Laporan
                                    3. Pilih Service order
                                    4. Dibagian kanan atas, terdapat icon untuk export, klik icon tersebut
                                    5. Muncul popup Simpan ke excel,
                                    <ul>
                                        <li>Pilih periode transaksi yang diinginkan</li>
                                        <li>Pilih kirim melalui email</li>
                                        <li>Klik kirim excel </li>
                                    </ul>
                                    <b>Selamat, anda telah berhasil mengirim laporan excel</b>";
                                    }
                                }
                                if($type == "text_134"){
                                    if($lang == "en-id"){
                                    return "How to Add Payment Methods For Each Shop ?";
                                    }else{
                                    return "Bagaimana Cara Menambah Metode Pembayaran Untuk Setiap Cabang ?";
                                    }
                                }
                                if($type == "text_135"){
                                    if($lang == "en-id"){
                                    return "1. Open Techanic Business App <br>
                                    2. On the bottom navigation section main page, click Setting icon <br>
                                    3. Click Pay Account <br>
                                    4. Click the blue button with plus icon in the lower right corner <br>
                                    5. There is a service provider form, account number, pay method & select branches <br>
                                    6. Select cth:BCA <br> service provider
                                    7. Next fill in the account number <br>
                                    8. Select QRIS pay method <br>
                                    9. Select branch <br>
                                    10. Last Click Save <br>
                                    
                                    <b>Good payment method is successfully stored</b>";
                                    }else{
                                    return "1. Buka aplikasi techanic business <br>
                                    2. Pada halaman utama bagian navigasi paling bawah, klik icon Setting <br>
                                    3. Klik Akun Bayar <br>
                                    4. Klik tombol berwarna biru dengan icon plus di pojok kanan bawah <br>
                                    5. Terdapat form penyedia layanan, nomor rekening, metode bayar & pilih cabang <br>
                                    6. Pilih penyedia layanan cth:BCA <br>
                                    7. Selanjutnya isi nomor rekening <br>
                                    8. Pilih metode bayar cth QRIS <br>
                                    9. Pilih cabang <br>
                                    10. Terakhir klik simpan  <br>

                                    <b>Baik metode pembayaran berhasil disimpan</b>
";
                                    }
                                }
                                if($type == "text_136"){
                                    if($lang == "en-id"){
                                    return "It's time to care";
                                    }else{
                                    return "Sudah Saatnya Kita Peduli";
                                    }
                                }
                                if($type == "text_137"){
                                    if($lang == "en-id"){
                                    return "What is happening to Earth ?";
                                    }else{
                                    return "Apa yang terjadi pada bumi saat ini ?";
                                    }
                                }
                                if($type == "text_138"){
                                    if($lang == "en-id"){
                                    return "Visit Articles";
                                    }else{
                                    return "Kunjungi Artikel";
                                    }
                                }
    }
}

if (!function_exists('link_ext')) {
    function link_ext($type='web')
    {

        if($type == 'playstore'){
            return 'https://play.google.com/store/apps/details?id=com.techanic.business.techanic_business&hl=id';
        }

        if($type == 'web'){
            return 'https://www.mytechanic.com/';
        }

        if($type == 'appstore'){
            return 'https://apps.apple.com/id/app/techanic-business/id1633443038';
        }
        
    }
}
