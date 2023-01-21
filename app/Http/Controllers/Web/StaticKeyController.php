<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticKeyController extends Controller
{
    public function getAll()
    {
        return [
            'categoryPageCategoryText' => 'Kategori',
            'rightMenuPopulerPostsHeader' => 'Popüler Yazılar',
            'rightMenuCategoriesHeader' => 'Kategoriler',
            'rightMenuTagsHeader' => 'Tagler',
            'rightMenuCategoryDoesntExists' => 'Listelenecek kategori bulunamadı...',
            'rightMenuPopularPostsDoesntExists' => 'Listelenecek popüler kategori bulunamadı...',
            'rightMenuTagsDoesntExists' => 'Listelenecek tag bulunamadı...',
            'rightMenuAboutButtonText' => 'Hakkımda',
            'placeHolderForSearchText' => 'Aramak için birşeyler yazınız...',
            'navBarMenuItem1' => 'Anasayfa',
            'navBarMenuItem2' => 'Kategoriler',
            'navBarMenuItem3' => 'Hakkımda',
            'navBarMenuItem4' => 'İletişim',
            'indexPostsHeader' => 'Son Yazılar',
            'indexPostHeaderNotExists' => 'Henüz hiçbir yazı yazılmamış.',
            'footerAboutMeHeader' => 'Hakkımda',
            'footerLatestPostsHeader' => 'Son Yazılarım',
            'footerQuickLinksHeader' => 'Hızlı Linkler',
            'footerSocialMediaHeader' => 'Sosyal Medya',
            'footerAboutMeReadMore' => 'Daha fazla..',
            'headerMenuHeader' => 'Hoşgeldiniz',
            'headerMenuHeaderLink' => '/',
            'aboutMeLatestPosts' => 'Son Yazılarım',
            'contactPageHeader' => 'Bana Ulaşın',
            'contactPageName' => 'Adınız',
            'contactPagePhone' => 'Telefonunuz',
            'contactPageEmail' => 'E-posta Adresiniz',
            'contactPageContent' => 'Mesaj Yazınız',
            'contactPageButtonText' => 'Mesaj Gönder',
            'blogSingleLeaveComment' => 'Yorum Yapabilirsiniz',
            'blogSingleName' => 'Adınız *',
            'blogSingleEmail' => 'Email *',
            'blogSingleWebSite' => 'Web Siteniz',
            'blogSingleComment' => 'Yorumunuz *',
            'blogSingleButtonText' => 'Gönder'

        ];
    }

    public function aboutMe(Request $request)
    {
        return [
            'image' => 'https://thumbs.dreamstime.com/b/generic-person-gray-photo-placeholder-man-silhouette-white-background-144511705.jpg',
            'title' => 'Merhaba, ben Mesut Yılmaz!',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit quia minus pariatur!',
        ];
    }

    public function socialMedias()
    {
        return [
            'twitter' => [
                'title' => 'Twitter',
                'link' => 'twitter.com',
                'icon' => 'fa fa-twitter'
            ],
            'facebook' => [
                'title' => 'Facebook',
                'link' => 'facebook.com',
                'icon' => 'fa fa-facebook'
            ],
            'instagram' => [
                'title' => 'Instagram',
                'link' => 'instagram.com',
                'icon' => 'fa fa-instagram'
            ],
            'linkedin' => [
                'title' => 'Linked-in',
                'link' => 'linkedin.com',
                'icon' => 'fa fa-linkedin'
            ],
            'youtube' => [
                'title' => 'Youtube',
                'link' => 'youtube.com',
                'icon' => 'fa fa-youtube-play'
            ]
        ];
    }
}
