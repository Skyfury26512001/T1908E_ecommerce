<?php

use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Product::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Product::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $products = [
            [
                'name' => 'SAUVAGE',
                'sex' => 'Nam',
                'brand_id' => '1', //Christian Dior
                'concentration' => 'Eau de Toilette',
                'volume' => '10ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '1966',
                'inventor_name' => 'Edmond Roudnitska',
//                'incense_group' => 'Hương thơm biển',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Hấp dẫn, Tươi mát, Nam tính, Tinh tế',
                'price' => '3500000',
                'description' => 'Hương Đầu: Tiêu, Cam Bergamot Calabria<br>
Hương giữa: Hoa phong lữ, Hoa Oải Hương, Xuyên tiêu, Dấu trám, Hồng tiêu, Cỏ hương bài, Cây hoắc hương<br>
Hương cuối: Gỗ tuyết tùng, Hương Labdanum, Hương Ambroxan<br>
<br>Yêu hay ghét, thì với rất nhiều người, Dior Sauvage vẫn luôn được công nhận là một chai nước hoa kinh điển của thế kỷ 21. Nếu bạn so sánh về mức độ phủ sóng của Sauvage và nhìn về năm phát hành của nó, cuối "năm 2015" thì bạn chắc chắn sẽ rất ngạc nhiên về sự nổi tiếng nhanh đến đáng sợ của gã đàn ông lắm tài nhiều tật này. Mọi người hay so sánh sự nổi tiếng giữa Sauvage của nhà Dior và Bleu de Chanel của nhà Chanel, xem thử ai là kẻ mạnh hơn, nhưng chung quy lại thì là kẻ 8 lạng người hơn nửa cân. Được đánh giá là đậm chất đàn ông,  Dior Sauvage mang trong mình mùi hương của sự phong lưu, mạnh mẽ và sát gái. Như chính người đại diện cho chai nước hoa này vậy, Johnny Depp, kẻ cướp biển được yêu quý nhất mọi thời đại. Vốn dĩ  Dior Sauvage là vậy, có tật, Bad boy nhưng ai cũng yêu quý và phục tùng. Francois Demachy, người sáng tạo ra  Dior Sauvage đã khéo léo pha trộn giữa Cam Bergamot và hương Ambroxan, tạo nên một khoảng màu xanh tươi mát của bầu trời, cùng sự mạnh mẽ và ấm nồng của tiêu đen và Gỗ tuyết tùng,  Dior Sauvage trở nên lôi cuốn không có điểm dừng. Kết thúc một buổi gặp gỡ với những câu chuyện cười thông minh hòa lẫn không khí sang trọng, lãng mạn của hoa Lavender, mọi ánh mắt sẽ chỉ hướng về gã  Dior Sauvage này mà thôi.',
                'thumbnail' => 'perfume_project/perfume/dior_sauvage_EDT_1_hhqwbq.jpg,perfume_project/perfume/dior_sauvage_EDT_2_mfakfp.jpg,perfume_project/perfume/dior_sauvage_EDT_3_nh7jtv.jpg,perfume_project/perfume/dior_sauvage_EDT_4_szikum.jpg,perfume_project/perfume/dior_sauvage_EDT_5_v0l7d4.jpg,perfume_project/perfume/dior_sauvage_EDT_6_dvax7d.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'ACQUA DI GIO',
                'sex' => 'Nam',
                'brand_id' => '4', //Giorgio Armani
                'concentration' => 'Eau de Toilette',
                'volume' => '100ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '1996',
                'inventor_name' => 'Alberto Morillas',
//                'incense_group' => 'Hương thơm biển',
                'incense_level' => 'Tạm ổn - 3 giờ đến 6 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Hạ',
                'style' => 'Nam tính, Tươi mát',
                'price' => '2100000',
                'description' => 'Hương Đầu: Quả cam, Quả chanh xanh, Quả quýt hồng, Hoa nhài, Cam Bergamot, Quả chanh vàng, Hoa cam Neroli<br>
Hương giữa: Hoa anh thảo, Nhục đậu khấu, Cây mộng tê (Mignonette), Ngò thơm, Hoa tím, Hoa lan Nam Phi, Hương nước biển, Quả đào, Hoa lan dạ hương (Hiacynth), Hoa hồng, Hoa nhài, Cây hương thảo, Hương Calone<br>
Hương cuối: Hổ phách, Cây hoắc hương, Rêu sồi, Gỗ tuyết tùng, Xạ hương trắng<br>
<br>Hương thơm này được chế tạo ra vào năm 1996 bởi Alberto Morillas. Lấy cảm hứng từ vẻ đẹp của Pantellerie, nơi ông đã trải qua kỳ nghỉ của mình, Armani tạo ra mùi thơm của Aqua di Gio cho cả nam giới lẫn nữ giới. Hương thơm dành cho nam giới là một mùi hương của sự tự do, đầy gió và nước. Hỗn hợp mùi hương này được hình thành từ sự hòa hợp hoàn hảo giữa mùi hương ngòn ngọt mằn mặn của nước biển và ánh nắng ấm áp mơn trớn trên làn da của bạn. Aqua di Gio đầy ánh nắng mặt trời Địa Trung Hải nóng như thiêu đốt.',
                'thumbnail' => 'perfume_project/perfume/acqua_di_gio_EDT_1_ztficq.jpg,perfume_project/perfume/acqua_di_gio_EDT_2_tcez4o.jpg,perfume_project/perfume/acqua_di_gio_EDT_3_wbz1tx.jpg,perfume_project/perfume/acqua_di_gio_EDT_4_jbvojc.jpg,perfume_project/perfume/acqua_di_gio_EDT_5_huqczl.jpg,perfume_project/perfume/acqua_di_gio_EDT_6_iavz0c.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'TERRE D`HERMES PARFUM',
                'sex' => 'Nam',
                'brand_id' => '5', //Hermes
                'concentration' => 'Eau de Parfum',
                'volume' => '75ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '2009',
                'inventor_name' => 'Jean-Claude Ellena',
//                'incense_group' => 'Hương gỗ Síp',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu, Đông',
                'style' => 'Phóng khoáng, Năng động, Cá tính',
                'price' => '2600000',
                'description' => 'Hương Đầu: Quả cam, Quả bưởi<br>
Hương giữa: Hương của gỗ, Rêu cây sồi, An tức hương, Flint<br>
Hương cuối: Hương của gỗ, Rêu cây sồi, An tức hương<br>
<br>Terre d’Hermes Parfum là dòng nước hoa của Hermes dành cho nam giới , được cho ra mắt vào năm 2009 và nó được xếp loại là hương gỗ Chypre. Cha đẻ của dòng nước hoa này là Jean-Claude Ellena. Đằng sau dòng nước hoa này là một câu chuyện thần thoại của thời kỳ cổ đại và thiên nhiên – Nó kể một câu chuyện về sự chuyển đổi, đơm hoa kết trải của trái đất thông qua mùi hương dễ chịu và ngây ngất.',
                'thumbnail' => 'perfume_project/perfume/terre_d_hermes_EDP_1_ko5rci.jpg,perfume_project/perfume/terre_d_hermes_EDP_2_yn33qs.jpg,perfume_project/perfume/terre_d_hermes_EDP_3_cfdfcq.jpg,perfume_project/perfume/terre_d_hermes_EDP_4_bnyxn8.jpg,perfume_project/perfume/terre_d_hermes_EDP_5_brdvaa.jpg,v1596216899/perfume_project/perfume/terre_d_hermes_EDP_6_qg36p5.png',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'VALENTINO UOMO INTENSE',
                'sex' => 'Nam',
                'brand_id' => '6', //Valentino
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '1', //Italy
                'recommended_age' => 'Trên 25',
                'released_year' => '2016',
                'inventor_name' => '-',
//                'incense_group' => 'Hương da thuộc',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Thu, Đông',
                'style' => 'Sang trọng , Lịch lãm, Hấp dẫn',
                'price' => '2100000',
                'description' => 'Hương Đầu: Quả quýt hồng, Cây đơn sâm<br>
Hương giữa: Hoa diên vĩ, Đậu Tonka<br>
Hương cuối: Da thuộc, Hương Va ni<br>
<br>Nước hoa nam Valentino Uomo Intense phù hợp với người trên 25 tuổi. Đây là dòng nước hoa Valentino này có độ lưu hương lâu - 7 giờ đến 12 giờ. và độ tỏa hương thuộc dạng xa - toả hương trong vòng bán kính 2 mét. Perfumista.vn khuyến cáo Valentino Uomo Intense phù hợp để sử dụng trong cả ngày lẫn đêm vào mùa thu, đông. Đây là dòng nước hoa Valentino thuộc nhóm Leather (Hương da thuộc). Valentino Uomo Intense được cho ra mắt vào năm 2016. Bên cạnh đó, Hoa diên vĩ và Hương Va ni là hai hương bạn có thể dễ dàng cảm nhận được nhất khi sử dụng nước hoa này.',
                'thumbnail' => 'perfume_project/perfume/valentino_uomo_intense_EDP_1_mokupq.jpg,perfume_project/perfume/valentino_uomo_intense_EDP_2_proprv.jpg,perfume_project/perfume/valentino_uomo_intense_EDP_3_unulum.jpg,perfume_project/perfume/valentino_uomo_intense_EDP_4_edxdk3.jpg,perfume_project/perfume/valentino_uomo_intense_EDP_5_hqugt2.jpg,perfume_project/perfume/valentino_uomo_intense_EDP_6_zvysly.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ALLURE HOMME SPORT EAU EXTREME',
                'sex' => 'Nam',
                'brand_id' => '2', //Chanel
                'concentration' => 'Eau de Parfume',
                'volume' => '100ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '2012',
                'inventor_name' => 'Jacques Polge',
//                'incense_group' => 'Hương gỗ thơm',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Hiện đại, Nam tính, Mạnh mẽ',
                'price' => '3250000',
                'description' => 'Hương Đầu: Cây xô thơm, Quả quýt hồng, Cây bạc hà, Cây bách<br>
Hương giữa: Tiêu<br>
Hương cuối: Xạ hương, Gỗ đàn hương, Gỗ tuyết tùng, Đậu tonka<br>
<br>Lấy cảm hứng từ những kỳ tích thể thao, người phá chế nước hoa của Chanel, Jacques Polge đã cho ra đời chai nước hoa Allure Homme Sport Eau Extreme,một phiên bản mới của Allure Homme Sport. Mẫu nước hoa nay được ra mắt vào năm 2012.Tổ hợp nước hoa này là sự hòa quyện tuyệt vời của quýt và đậu tonka, tạo nên một mùi hương lâu dài và làm hài lòng bất cứ ai sử dụng. Nước hoa tỏa hương đủ mạnh vào mùa đông, nhưng vẫn nhẹ nhàng vào những mùa xuân/hè.',
                'thumbnail' => 'perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_1_zrfwsf.jpg,perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_2_rpp195.jpg,perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_3_es3rd0.jpg,perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_4_rcjm1b.jpg,v1596216877/perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_5_xjngr6.jpg,perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_6_t30qf7.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'GUCCI BY GUCCI POUR HOMME',
                'sex' => 'Nam',
                'brand_id' => '7', //Gucci
                'concentration' => 'Eau de Toillete',
                'volume' => '90ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '2008',
                'inventor_name' => 'Aurelien Guichard',
//                'incense_group' => 'Hương gỗ Síp',
                'incense_level' => 'Tạm ổn - 3 giờ đến 6 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu, Đông',
                'style' => 'Nam tính, Quyến rũ, Lịch lãm',
                'price' => '2250000',
                'description' => 'Hương Đầu: Cam Bergamot, Cây bách, Hoa tím<br>
Hương giữa: Cây thuốc lá, Hoa nhài<br>
Hương cuối: Cây hoắc hương, Trầm hương, Hổ phách, Hương nhựa cây Elemi, Da thuộc<br>
<br>Phiên bản dành cho nam với tên gọi Gucci by Gucci Pour Homme được sáng tạo bởi giám đốc sáng tạo của hãng Gucci là Frida Giannini, với sự hợp tác của Givaudan và P&G vào năm 2008. Hương nước hoa được biết đến như một hương gỗ Chypre hiện đại và bao gồm những hương như hoa tím và cây bách ở lớp đầu, lớp giữa gồm có hương của thuốc lá và hoa nhài, lớp nền bao gồm sự hiện diện của hoắc hương, hổ phách và dấu trám.',
                'thumbnail' => 'perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_1_ivvrqf.jpg,perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_2_pn75s7.png,perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_3_zwoeol.jpg,perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_4_h2c6ap.jpg,perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_5_jglby0.jpg,perfume_project/perfume/gucci_by_gucci_pour_homme_EDT_6_lbvgas.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'AVENTUS',
                'sex' => 'Nam',
                'brand_id' => '3', //Creed
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '2010',
                'inventor_name' => 'Aurelien Guichard',
//                'incense_group' => 'Hương trái cây Síp',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Chững chạc, Giản dị',
                'price' => '7200000',
                'description' => 'Hương Đầu: Cam Bergamot, Quả lý chua đen, Quả dứa (quả thơm), Quả táo xanh<br>
Hương giữa: Gỗ Bu-lô, Cây hoắc hương, Hoa hồng, Hoa nhài Morocco<br>
Hương cuối: Xạ hương, Rêu cây sồi, Hương Va ni (Vanille), Long diên hương<br>
<br>Aventus được lấy cảm hứng từ cuộc đời đầy kịch tính của Hoàng Đế Napoleon (chiến tranh, hòa bình, lãng mạn). Aventus là dòng nước hoa dành cho nam giới được giới thiệu vào năm 2010. Nó thuộc nhóm hương trái cây Chypre. Người sáng tạo ra dòng nước hoa này là Erwin Creed 7th, Olivier Creed 6th Generation.',
                'thumbnail' => 'perfume_project/perfume/creed_aventus_EDP_1_djxmuq.jpg,perfume_project/perfume/creed_aventus_EDP_2_syiehy.jpg,perfume_project/perfume/creed_aventus_EDP_3_ntoqrh.jpg,perfume_project/perfume/creed_aventus_EDP_4_q4voia.jpg,perfume_project/perfume/creed_aventus_EDP_5_ggr5ow.jpg,perfume_project/perfume/creed_aventus_EDP_6_trfx3w.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'SANTAL 33',
                'sex' => 'Phi giới tính',
                'brand_id' => '8', //Le Labo
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '3', //American
                'recommended_age' => 'Trên 25',
                'released_year' => '2011',
                'inventor_name' => 'Frank Voelkl',
//                'incense_group' => 'Hương gỗ thơm',
                'incense_level' => 'Rất lâu - Trên 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu',
                'style' => 'Độc đáo , Bí ẩn , Quyến rũ',
                'price' => '6500000',
                'description' => 'Hương chính: Gỗ đàn hương, Gỗ tuyết tùng Virginia, Bạch đậu khấu, Hoa tím, Giấy cói, Da thuộc, Hổ phách, Hoa diên vĩ<br>
<br>Nước hoa Santal 33 của thương hiệu Le Labo là nước hoa thuộc dòng hương gỗ thơm dành cho cả nam lẫn nữ và đã được giới thiệu vào năm 2011. Người đã thiết kế nên mùi hương nước hoa này chính là Frank Voelkl. Lấy cảm hứng từ Santal 26, một trong những loại nền thơm mà ít người biết đến, một mùi hương thích hợp cho cả nam và nữ. Santal 33 nhắm đến việc truyền tải lại huyền thoại của những chàng cao bồi: Những vùng đất bao la, những cơn gió sa mạc nóng bức, những chiếc yên ngựa phơi nắng, và khói tỏa ra từ những bếp lửa về đêm.',
                'thumbnail' => 'perfume_project/perfume/santal_33_EDP_1_uy7xtb.jpg,perfume_project/perfume/santal_33_EDP_2_mlw8qb.jpg,perfume_project/perfume/santal_33_EDP_3_l45uov.jpg,perfume_project/perfume/santal_33_EDP_4_cqzwjx.jpg,perfume_project/perfume/santal_33_EDP_5_x5vk9i.jpg,perfume_project/perfume/santal_33_EDP_6_pmxnwb.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'CHANEL NO 5 PARFUM',
                'sex' => 'Nữ',
                'brand_id' => '2', //Chanel
                'concentration' => 'Eau de Parfum',
                'volume' => '50ml',
                'origin_id' => '2', //France
                'recommended_age' => 'Trên 25',
                'released_year' => '1921',
                'inventor_name' => 'Ernest Beaux',
//                'incense_group' => 'Hương hoa cỏ An-Đê-Hít',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Thu, Đông',
                'style' => 'Cổ điển , Sang trọng , Quyến rũ',
                'price' => '2850000',
                'description' => 'Hương Đầu: Hương An-đê-hít, Hoa cam Neroli, Quả chanh vàng, Cam Bergamot, Hoa ngọc lan tây<br>
Hương giữa: Hoa nhài, Hoa diên vĩ, Rễ cây diên vĩ, Hoa hồng, Hoa linh lan thung lũng<br>
Hương cuối: Cỏ hương bài, Xạ hương, Gỗ đàn hương, Cây hoắc hương, Rêu sồi Moss, Hổ phách, Hương Va ni, Hương cầy<br>
<br>Huyền thoại Chanel No 5 được tinh chế bởi chuyên gia nước hoa Ernest Beaux vào năm 1921 cho nhãn hiệu Coco Chanel và được giới thiệu lần đầu tiên với ba nồng độ: Parfum, Eau de Toilette và Eau de Cologne. Phiên bản có nồng độ parfum được ra mắt với phiên bản chai 7.5ml. Các nồng độ có hương thơm không mấy khác biệt.',
                'thumbnail' => 'perfume_project/perfume/chanel_no5_EDP_1_oa6gil.jpg,perfume_project/perfume/chanel_no5_EDP_2_pthq9x.jpg,perfume_project/perfume/chanel_no5_EDP_3_cxibbx.jpg,perfume_project/perfume/chanel_no5_EDP_4_y65flw.jpg,perfume_project/perfume/chanel_no5_EDP_5_jpvvg2.jpg,perfume_project/perfume/chanel_no5_EDP_6_qvuslr.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'NARCISO RODRIGUEZ FOR HER',
                'sex' => 'Nữ',
                'brand_id' => '9', //Narciso Rodriguez
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '3', //American
                'recommended_age' => 'Trên 25',
                'released_year' => '2006',
                'inventor_name' => 'Francis Kurkdjian',
//                'incense_group' => 'Hương hoa cỏ Gỗ - Xạ hương',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu, Đông',
                'style' => 'Gợi cảm , Nữ tính , Tính tế',
                'price' => '2450000',
                'description' => 'Hương Đầu: Hoa hồng, Quả đào<br>
Hương giữa: Xạ hương, Hổ phách<br>
Hương cuối: Gỗ đàn hương, Cây hoắc hương<br>
<br>Sau phiên bản EDT ra mắt vào năm 2004, phiên bản Narciso Rodriguez for Her Narciso Rodriguez for Her Eau de Parfum được tiếp tục giới thiệu vào năm 2006 với mẫu thiết kế chai màu hồng và vỏ hộp màu đen. Christine Nagel và Francis Kurkdjian là những chuyên gia nước hoa danh tiếng đã sáng tạo ra mùi hương này. Narciso Rodriguez for Her Eau de Parfum mang đến mùi hương đầy quyến rũ và tràn ngập nữ tính khi kết hợp với những cánh hoa hồng rực rỡ, hương thơm đào tươi mát, xen lẫn với chút hổ phách tinh tế và đặc biệt là một mùi xạ hương gợi cảm đầy nổi bật.',
                'thumbnail' => 'perfume_project/perfume/narciso_rodriguez_EDP_1_myjdrm.jpg,perfume_project/perfume/narciso_rodriguez_EDP_2_bztohv.jpg,perfume_project/perfume/narciso_rodriguez_EDP_3_z377y7.jpg,perfume_project/perfume/narciso_rodriguez_EDP_4_tbjse3.jpg,perfume_project/perfume/narciso_rodriguez_EDP_5_olbaw9.jpg,perfume_project/perfume/narciso_rodriguez_EDP_6_imeod0.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Product::insert($products);
    }
}

