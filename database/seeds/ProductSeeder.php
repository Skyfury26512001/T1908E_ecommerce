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
                'sex' => 'Male',
                'brand_id' => '1', //Christian Dior
                'concentration' => 'Eau de Toilette',
                'volume' => '10ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '1966',
                'inventor_name' => 'Edmond Roudnitska',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Hấp dẫn, Tươi mát, Nam tính, Tinh tế',
                'price' => '3500000',
                'description' => '
                Hương Đầu: Tiêu, Cam Bergamot Calabria
                Hương giữa: Hoa phong lữ, Hoa Oải Hương, Xuyên tiêu, Dấu trám, Hồng tiêu, Cỏ hương bài, Cây hoắc hương
                Hương cuối: Gỗ tuyết tùng, Hương Labdanum, Hương Ambroxan

                Tổng quan: Yêu hay ghét, thì với rất nhiều người, Dior Sauvage vẫn luôn được công nhận là một chai nước hoa kinh điển của thế kỷ 21. Nếu bạn so sánh về mức độ phủ sóng của Sauvage và nhìn về năm phát hành của nó, cuối "năm 2015" thì bạn chắc chắn sẽ rất ngạc nhiên về sự nổi tiếng nhanh đến đáng sợ của gã đàn ông lắm tài nhiều tật này. Mọi người hay so sánh sự nổi tiếng giữa Sauvage của nhà Dior và Bleu de Chanel của nhà Chanel, xem thử ai là kẻ mạnh hơn, nhưng chung quy lại thì là kẻ 8 lạng người hơn nửa cân. Được đánh giá là đậm chất đàn ông,  Dior Sauvage mang trong mình mùi hương của sự phong lưu, mạnh mẽ và sát gái. Như chính người đại diện cho chai nước hoa này vậy, Johnny Depp, kẻ cướp biển được yêu quý nhất mọi thời đại. Vốn dĩ  Dior Sauvage là vậy, có tật, Bad boy nhưng ai cũng yêu quý và phục tùng. Francois Demachy, người sáng tạo ra  Dior Sauvage đã khéo léo pha trộn giữa Cam Bergamot và hương Ambroxan, tạo nên một khoảng màu xanh tươi mát của bầu trời, cùng sự mạnh mẽ và ấm nồng của tiêu đen và Gỗ tuyết tùng,  Dior Sauvage trở nên lôi cuốn không có điểm dừng. Kết thúc một buổi gặp gỡ với những câu chuyện cười thông minh hòa lẫn không khí sang trọng, lãng mạn của hoa Lavender, mọi ánh mắt sẽ chỉ hướng về gã  Dior Sauvage này mà thôi.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/dior-sauvage-eau-de-toilette_4b691e72f53e41c5abe1aa53cf66830c_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'ACQUA DI GIO',
                'sex' => 'Male',
                'brand_id' => '2', //Giorgio Armani
                'concentration' => 'Eau de Toilette',
                'volume' => '100ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '1996',
                'inventor_name' => 'Alberto Morillas',
                'incense_level' => 'Tạm ổn - 3 giờ đến 6 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Hạ',
                'style' => 'Nam tính, Tươi mát',
                'price' => '2100000',
                'description' => '
                Hương Đầu: Quả cam, Quả chanh xanh, Quả quýt hồng, Hoa nhài, Cam Bergamot, Quả chanh vàng, Hoa cam Neroli
                Hương giữa: Hoa anh thảo, Nhục đậu khấu, Cây mộng tê (Mignonette), Ngò thơm, Hoa tím, Hoa lan Nam Phi, Hương nước biển, Quả đào, Hoa lan dạ hương (Hiacynth), Hoa hồng, Hoa nhài, Cây hương thảo, Hương Calone
                Hương cuối: Hổ phách, Cây hoắc hương, Rêu sồi, Gỗ tuyết tùng, Xạ hương trắng

                Tổng quan: Hương thơm này được chế tạo ra vào năm 1996 bởi Alberto Morillas. Lấy cảm hứng từ vẻ đẹp của Pantellerie, nơi ông đã trải qua kỳ nghỉ của mình, Armani tạo ra mùi thơm của Aqua di Gio cho cả nam giới lẫn nữ giới. Hương thơm dành cho nam giới là một mùi hương của sự tự do, đầy gió và nước. Hỗn hợp mùi hương này được hình thành từ sự hòa hợp hoàn hảo giữa mùi hương ngòn ngọt mằn mặn của nước biển và ánh nắng ấm áp mơn trớn trên làn da của bạn. Aqua di Gio đầy ánh nắng mặt trời Địa Trung Hải nóng như thiêu đốt.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/giorgio-armani-acqua-di-gio-pour-homme_465b5e5f23e944ec8b98f6e8d50dbef4_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'TERRE D`HERMES PARFUM',
                'sex' => 'Male',
                'brand_id' => '3', //Hermes
                'concentration' => 'Eau de Parfum',
                'volume' => '75ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2009',
                'inventor_name' => 'Jean-Claude Ellena',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu, Đông',
                'style' => 'Phóng khoáng, Năng động, Cá tính',
                'price' => '2600000',
                'description' => '
                Hương Đầu: Quả cam, Quả bưởi
                Hương giữa: Hương của gỗ, Rêu cây sồi, An tức hương, Flint
                Hương cuối: Hương của gỗ, Rêu cây sồi, An tức hương

                Tổng quan: Terre d’Hermes Parfum là dòng nước hoa của Hermes dành cho nam giới , được cho ra mắt vào năm 2009 và nó được xếp loại là hương gỗ Chypre. Cha đẻ của dòng nước hoa này là Jean-Claude Ellena. Đằng sau dòng nước hoa này là một câu chuyện thần thoại của thời kỳ cổ đại và thiên nhiên – Nó kể một câu chuyện về sự chuyển đổi, đơm hoa kết trải của trái đất thông qua mùi hương dễ chịu và ngây ngất.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/hermes-terre-d_hermes-pure-perfume_c32c9a5310244319a1c74c2a953b217f_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'VALENTINO UOMO INTENSE',
                'sex' => 'Male',
                'brand_id' => '1', //Valentino
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '1', //Tây ban nha
                'recommended_age' => 'Trên 25',
                'release_year' => '2016',
                'inventor_name' => 'Unknown',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Thu, Đông',
                'style' => 'Sang trọng , Lịch lãm, Hấp dẫn',
                'price' => '2100000',
                'description' => '
                Hương Đầu: Quả quýt hồng, Cây đơn sâm
                Hương giữa: Hoa diên vĩ, Đậu Tonka
                Hương cuối: Da thuộc, Hương Va ni

                Tổng quan: Nước hoa nam Valentino Uomo Intense phù hợp với người trên 25 tuổi.Đây là dòng nước hoa Valentino này có độ lưu hương lâu - 7 giờ đến 12 giờ. và độ tỏa hương thuộc dạng xa - toả hương trong vòng bán kính 2 mét. Perfumista.vn khuyến cáo Valentino Uomo Intense phù hợp để sử dụng trong cả ngày lẫn đêm vào mùa thu, đông. Đây là dòng nước hoa Valentino thuộc nhóm Leather (Hương da thuộc). Valentino Uomo Intense được cho ra mắt vào năm 2016. Bên cạnh đó, Hoa diên vĩ và Hương Va ni là hai hương bạn có thể dễ dàng cảm nhận được nhất khi sử dụng nước hoa này.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/valentino-uomo-intense_ad53477eef8141fc881e396466a06b87_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'ALLURE HOMME SPORT EAU EXTREME',
                'sex' => 'Male',
                'brand_id' => '2', //Chanel
                'concentration' => 'Eau de Parfume',
                'volume' => '100ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2012',
                'inventor_name' => 'Jacques Polge',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Hiện đại, Nam tính, Mạnh mẽ',
                'price' => '3250000',
                'description' => '
                Hương Đầu: Cây xô thơm, Quả quýt hồng, Cây bạc hà, Cây bách
                Hương giữa: Tiêu
                Hương cuối: Xạ hương, Gỗ đàn hương, Gỗ tuyết tùng, Đậu tonka

                Tổng quan: Lấy cảm hứng từ những kỳ tích thể thao, người phá chế nước hoa của Chanel, Jacques Polge đã cho ra đời chai nước hoa Allure Homme Sport Eau Extreme,một phiên bản mới của Allure Homme Sport. Mẫu nước hoa nay được ra mắt vào năm 2012.Tổ hợp nước hoa này là sự hòa quyện tuyệt vời của quýt và đậu tonka, tạo nên một mùi hương lâu dài và làm hài lòng bất cứ ai sử dụng. Nước hoa tỏa hương đủ mạnh vào mùa đông, nhưng vẫn nhẹ nhàng vào những mùa xuân/hè.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/chanel-allure-homme-sport-eau-extreme-eau-de-parfum_3720ef670d0c45ed9659679b5463c509_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'GUCCI BY GUCCI POUR HOMME',
                'sex' => 'Male',
                'brand_id' => '3', //Gucci
                'concentration' => 'Eau de Toillete',
                'volume' => '90ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2008',
                'inventor_name' => 'Aurelien Guichard',
                'incense_level' => 'Tạm ổn - 3 giờ đến 6 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu, Đông',
                'style' => 'Nam tính, Quyến rũ, Lịch lãm',
                'price' => '2250000',
                'description' => '
                Hương Đầu: Cam Bergamot, Cây bách, Hoa tím
                Hương giữa: Cây thuốc lá, Hoa nhài
                Hương cuối: Cây hoắc hương, Trầm hương, Hổ phách, Hương nhựa cây Elemi, Da thuộc

                Tổng quan: Phiên bản dành cho nam với tên gọi Gucci by Gucci Pour Homme được sáng tạo bởi giám đốc sáng tạo của hãng Gucci là Frida Giannini, với sự hợp tác của Givaudan và P&G vào năm 2008. Hương nước hoa được biết đến như một hương gỗ Chypre hiện đại và bao gồm những hương như hoa tím và cây bách ở lớp đầu, lớp giữa gồm có hương của thuốc lá và hoa nhài, lớp nền bao gồm sự hiện diện của hoắc hương, hổ phách và dấu trám.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/gucci-by-gucci-pour-homme_6737cabbe426457ea39ff935e42442c9_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'AVENTUS',
                'sex' => 'Male',
                'brand_id' => '1', //Creed
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2010',
                'inventor_name' => 'Aurelien Guichard',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Hạ, Thu',
                'style' => 'Chững chạc, Giản dị',
                'price' => '7200000',
                'description' => '
                Hương Đầu: Cam Bergamot, Quả lý chua đen, Quả dứa (quả thơm), Quả táo xanh
                Hương giữa: Gỗ Bu-lô, Cây hoắc hương, Hoa hồng, Hoa nhài Morocco
                Hương cuối: Xạ hương, Rêu cây sồi, Hương Va ni (Vanille), Long diên hương

                Tổng quan: Aventus được lấy cảm hứng từ cuộc đời đầy kịch tính của Hoàng Đế Napoleon (chiến tranh, hòa bình, lãng mạn). Aventus là dòng nước hoa dành cho nam giới được giới thiệu vào năm 2010. Nó thuộc nhóm hương trái cây Chypre. Người sáng tạo ra dòng nước hoa này là Erwin Creed 7th, Olivier Creed 6th Generation.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/creed-aventus-100ml-edp_d6a9b983c5d94cf2a48504f3dc8ae461_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'SANTAL 33',
                'sex' => 'Unisex',
                'brand_id' => '2', //Le Labo
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '3', //Mỹ
                'recommended_age' => 'Trên 25',
                'release_year' => '2011',
                'inventor_name' => 'Frank Voelkl',
                'incense_level' => 'Rất lâu - Trên 12 giờ',
                'aroma_level' => 'Xa - Toả hương trong vòng bán kính 2 mét',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu',
                'style' => 'Độc đáo , Bí ẩn , Quyến rũ',
                'price' => '6500000',
                'description' => '
                Hương chính: Gỗ đàn hương, Gỗ tuyết tùng Virginia, Bạch đậu khấu, Hoa tím, Giấy cói, Da thuộc, Hổ phách, Hoa diên vĩ

                Tổng quan: Nước hoa Santal 33 của thương hiệu Le Labo là nước hoa thuộc dòng hương gỗ thơm dành cho cả nam lẫn nữ và đã được giới thiệu vào năm 2011. Người đã thiết kế nên mùi hương nước hoa này chính là Frank Voelkl. Lấy cảm hứng từ Santal 26, một trong những loại nền thơm mà ít người biết đến, một mùi hương thích hợp cho cả nam và nữ. Santal 33 nhắm đến việc truyền tải lại huyền thoại của những chàng cao bồi: Những vùng đất bao la, những cơn gió sa mạc nóng bức, những chiếc yên ngựa phơi nắng, và khói tỏa ra từ những bếp lửa về đêm.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/santal_33_b0bc726f259d47a28716355e89e11b71_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'CHANEL NO 5 PARFUM',
                'sex' => 'Female',
                'brand_id' => '2', //Chanel
                'concentration' => 'Eau de Parfum',
                'volume' => '50ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '1921',
                'inventor_name' => 'Ernest Beaux',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Thu, Đông',
                'style' => 'Cổ điển , Sang trọng , Quyến rũ',
                'price' => '2850000',
                'description' => '
                Hương Đầu: Hương An-đê-hít, Hoa cam Neroli, Quả chanh vàng, Cam Bergamot, Hoa ngọc lan tây
                Hương giữa: Hoa nhài, Hoa diên vĩ, Rễ cây diên vĩ, Hoa hồng, Hoa linh lan thung lũng
                Hương cuối: Cỏ hương bài, Xạ hương, Gỗ đàn hương, Cây hoắc hương, Rêu sồi Moss, Hổ phách, Hương Va ni, Hương cầy

                Tổng quan: Huyền thoại Chanel No 5 được tinh chế bởi chuyên gia nước hoa Ernest Beaux vào năm 1921 cho nhãn hiệu Coco Chanel và được giới thiệu lần đầu tiên với ba nồng độ: Parfum, Eau de Toilette và Eau de Cologne. Phiên bản có nồng độ parfum được ra mắt với phiên bản chai 7.5ml. Các nồng độ có hương thơm không mấy khác biệt.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/chanel-no5-eau-premiere-eau-de-parfum_c2b05ff659d44e66a21b120b94465158_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'NARCISO RODRIGUEZ FOR HER EAU DE PARFUM',
                'sex' => 'Female',
                'brand_id' => '3', //Narciso Rodriguez
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2006',
                'inventor_name' => 'Francis Kurkdjian',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu, Đông',
                'style' => 'Gợi cảm , Nữ tính , Tính tế',
                'price' => '2450000',
                'description' => '
                Hương Đầu: Hoa hồng, Quả đào
                Hương giữa: Xạ hương, Hổ phách
                Hương cuối: Gỗ đàn hương, Cây hoắc hương

                Tổng quan: Sau phiên bản EDT ra mắt vào năm 2004, phiên bản Narciso Rodriguez for Her Narciso Rodriguez for Her Eau de Parfum được tiếp tục giới thiệu vào năm 2006 với mẫu thiết kế chai màu hồng và vỏ hộp màu đen. Christine Nagel và Francis Kurkdjian là những chuyên gia nước hoa danh tiếng đã sáng tạo ra mùi hương này. Narciso Rodriguez for Her Eau de Parfum mang đến mùi hương đầy quyến rũ và tràn ngập nữ tính khi kết hợp với những cánh hoa hồng rực rỡ, hương thơm đào tươi mát, xen lẫn với chút hổ phách tinh tế và đặc biệt là một mùi xạ hương gợi cảm đầy nổi bật.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/narciso-rodriguez-for-her-eau-de-parfum_e67c5a87c3de4f15a3a3e1fea1f71ffd_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        $product_test = [
            [
                'name' => 'NARCISO RODRIGUEZ FOR HER EAU DE PARFUM',
                'sex' => 'Female',
                'brand_id' => '3', //Narciso Rodriguez
                'concentration' => 'Eau de Parfum',
                'volume' => '100ml',
                'origin_id' => '2', //Pháp
                'recommended_age' => 'Trên 25',
                'release_year' => '2006',
                'inventor_name' => 'Francis Kurkdjian',
                'incense_level' => 'Lâu - 7 giờ đến 12 giờ',
                'aroma_level' => 'Gần - Toả hương trong vòng một cánh tay',
                'recommended_time' => 'Ngày, Đêm, Xuân, Thu, Đông',
                'style' => 'Gợi cảm , Nữ tính , Tính tế',
                'price' => '2450000',
                'description' => '
                Hương Đầu: Hoa hồng, Quả đào
                Hương giữa: Xạ hương, Hổ phách
                Hương cuối: Gỗ đàn hương, Cây hoắc hương

                Tổng quan: Sau phiên bản EDT ra mắt vào năm 2004, phiên bản Narciso Rodriguez for Her Narciso Rodriguez for Her Eau de Parfum được tiếp tục giới thiệu vào năm 2006 với mẫu thiết kế chai màu hồng và vỏ hộp màu đen. Christine Nagel và Francis Kurkdjian là những chuyên gia nước hoa danh tiếng đã sáng tạo ra mùi hương này. Narciso Rodriguez for Her Eau de Parfum mang đến mùi hương đầy quyến rũ và tràn ngập nữ tính khi kết hợp với những cánh hoa hồng rực rỡ, hương thơm đào tươi mát, xen lẫn với chút hổ phách tinh tế và đặc biệt là một mùi xạ hương gợi cảm đầy nổi bật.',
                'thumbnail' => 'https://product.hstatic.net/1000340570/product/narciso-rodriguez-for-her-eau-de-parfum_e67c5a87c3de4f15a3a3e1fea1f71ffd_master.jpg',
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Product::insert($products);
    }
}

