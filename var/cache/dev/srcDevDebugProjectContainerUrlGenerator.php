<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
        'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
        'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
        'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
        'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
        'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
        'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
        'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/register/confirm']], [], []],
        'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
        'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
        'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
        'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
        'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetting/reset']], [], []],
        'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'show_discuss' => [['name', 'page'], ['_controller' => 'App\\Controller\\ShowDiscussController::index'], [], [['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'name'], ['text', '/show_d']], [], []],
        'hello_world' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\HelloWorldController::hello'], [], [['variable', '/', '[^/]++', 'page'], ['text', '/top/cnt']], [], []],
        'user_settings' => [[], ['_controller' => 'App\\Controller\\UserSettingsController::index'], [], [['text', '/top/settings']], [], []],
        'groups_mng' => [[], ['_controller' => 'App\\Controller\\GroupAdminController::index'], [], [['text', '/top/groups_mng']], [], []],
        'group_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupAdminController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/groups_mng/edit']], [], []],
        'group_delete' => [['id'], ['_controller' => 'App\\Controller\\GroupAdminController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/groups_mng/delete']], [], []],
        'group_show' => [['id'], ['_controller' => 'App\\Controller\\GroupAdminController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/groups_mng/show']], [], []],
        'group_user' => [[], ['_controller' => 'App\\Controller\\GroupUserController::index'], [], [['text', '/top/groups_user']], [], []],
        'group_user_show' => [['id'], ['_controller' => 'App\\Controller\\GroupUserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/groups_user/show']], [], []],
        'group_user_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupUserController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/groups_user/edit']], [], []],
        'group_user_admin_delete' => [['groupid', 'userid'], ['_controller' => 'App\\Controller\\GroupUserController::admindelete'], [], [['variable', '/', '[^/]++', 'userid'], ['variable', '/', '[^/]++', 'groupid'], ['text', '/top/group_user/admin_delete']], [], []],
        'group_user_delete' => [['id'], ['_controller' => 'App\\Controller\\GroupUserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/group_user/group_delete']], [], []],
        'group_user_subscribe' => [['groupid'], ['_controller' => 'App\\Controller\\GroupUserController::subscribe'], [], [['variable', '/', '[^/]++', 'groupid'], ['text', '/top/group_user/group_subscribe']], [], []],
        'group_user_unsubscribe' => [['groupid'], ['_controller' => 'App\\Controller\\GroupUserController::unsubscribe'], [], [['variable', '/', '[^/]++', 'groupid'], ['text', '/top/group_user/group_unsubscribe']], [], []],
        'admin_delete' => [['groupid', 'userid'], ['_controller' => 'App\\Controller\\GroupAdminController::admindelete'], [], [['variable', '/', '[^/]++', 'userid'], ['variable', '/', '[^/]++', 'groupid'], ['text', '/top/groups_mng/admin_delete']], [], []],
        'discuss' => [['name'], ['_controller' => 'App\\Controller\\GroupContentController::index'], [], [['variable', '/', '[^/]++', 'name'], ['text', '/top/d']], [], []],
        'discuss_new' => [['id'], ['_controller' => 'App\\Controller\\GroupContentController::new'], [], [['text', '/new/'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/d']], [], []],
        'discuss_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupContentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/d']], [], []],
        'discuss_reply' => [['cid', 'gid'], ['_controller' => 'App\\Controller\\GroupContentController::reply'], [], [['text', '/reply'], ['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/d']], [], []],
        'discuss2' => [['name', 'page'], ['_controller' => 'App\\Controller\\GroupContent2Controller::index'], [], [['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'name'], ['text', '/top/d2']], [], []],
        'discuss2_new' => [['id', 'page'], ['_controller' => 'App\\Controller\\GroupContent2Controller::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/d2']], [], []],
        'discuss2_edit' => [['id', 'page'], ['_controller' => 'App\\Controller\\GroupContent2Controller::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/d2']], [], []],
        'discuss2_reply' => [['cid', 'page', 'gid'], ['_controller' => 'App\\Controller\\GroupContent2Controller::reply'], [], [['text', '/reply'], ['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/d2']], [], []],
        'discuss2_delete' => [['id', 'page'], ['_controller' => 'App\\Controller\\GroupContent2Controller::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'page'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/d2']], [], []],
        'gallery' => [[], ['_controller' => 'App\\Controller\\GalleryController::index'], [], [['text', '/top/gallery']], [], []],
        'gallery2' => [[], ['_controller' => 'App\\Controller\\Gallery2Controller::index'], [], [['text', '/top/gallery2']], [], []],
        'user_delete' => [[], ['_controller' => 'App\\Controller\\UserDeleteController::index'], [], [['text', '/top/userdel']], [], []],
        'user_delete_confirm' => [['uid'], ['_controller' => 'App\\Controller\\UserDeleteController::confirm'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userdel_confirm']], [], []],
        'user_password' => [[], ['_controller' => 'App\\Controller\\UserPasswordController::index'], [], [['text', '/top/userpassword']], [], []],
        'user_avatar' => [[], ['_controller' => 'App\\Controller\\UserAvatarController::index'], [], [['text', '/top/useravatar']], [], []],
        'user_gallery' => [[], ['_controller' => 'App\\Controller\\UserGalleryController::index'], [], [['text', '/top/usergallery']], [], []],
        'user_gallery_add' => [[], ['_controller' => 'App\\Controller\\UserGalleryController::add'], [], [['text', '/top/usergalleryadd']], [], []],
        'user_gallery_content' => [['uid', 'gid'], ['_controller' => 'App\\Controller\\UserGalleryController::content'], [], [['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycontent']], [], []],
        'user_gallery_content_upload' => [['uid', 'gid'], ['_controller' => 'App\\Controller\\UserGalleryController::contentupload'], [], [['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycontentupload']], [], []],
        'user_gallery_content_delete' => [['uid', 'gid', 'file'], ['_controller' => 'App\\Controller\\UserGalleryController::contentdelete'], [], [['variable', '/', '[^/]++', 'file'], ['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycontentdel']], [], []],
        'user_gallery_content_mass_delete' => [['uid', 'gid'], ['_controller' => 'App\\Controller\\UserGalleryController::contentmassdelete'], [], [['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycontentmassdel']], [], []],
        'user_gallery_album_mass_delete' => [['uid'], ['_controller' => 'App\\Controller\\UserGalleryController::albummassdelete'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/galleryalbummassdelete']], [], []],
        'user_gallery_content_failure' => [['unknown'], ['_controller' => 'App\\Controller\\UserGalleryController::contentfailure'], [], [['variable', '/', '[^/]++', 'unknown'], ['text', '/top/gallerycontentfailure']], [], []],
        'user_gallery_delete' => [['uid', 'gid'], ['_controller' => 'App\\Controller\\UserGalleryController::gallerydelete'], [], [['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerydelete']], [], []],
        'user_gallery_title_set' => [['uid', 'gid', 'file'], ['_controller' => 'App\\Controller\\UserGalleryController::gallerytitleset'], [], [['variable', '/', '[^/]++', 'file'], ['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerydescset']], [], []],
        'user_gallery_comment_edit' => [['gcid', 'imgid'], ['_controller' => 'App\\Controller\\UserGalleryController::comment_edit'], [], [['variable', '/', '[^/]++', 'imgid'], ['variable', '/', '[^/]++', 'gcid'], ['text', '/top/gallerycomment/edit']], [], []],
        'user_gallery_comment' => [['uid', 'imgid'], ['_controller' => 'App\\Controller\\UserGalleryController::comment'], [], [['variable', '/', '[^/]++', 'imgid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycomment']], [], []],
        'user_gallery_comment_delete' => [['uid', 'imgid', 'fname'], ['_controller' => 'App\\Controller\\UserGalleryController::comment_delete'], [], [['text', '/'], ['variable', '/', '[^/]++', 'fname'], ['variable', '/', '[^/]++', 'imgid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerycomment/delete']], [], []],
        'user_gallery_setavatar' => [['uid', 'gid', 'id'], ['_controller' => 'App\\Controller\\UserGalleryController::setavatar'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id'], ['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/gallerysetavatar']], [], []],
        'user_profile' => [[], ['_controller' => 'App\\Controller\\UserProfileController::index'], [], [['text', '/top/userprofile']], [], []],
        'group_add' => [[], ['_controller' => 'App\\Controller\\GroupUserAdd::index'], [], [['text', '/top/group_add']], [], []],
        'group_own' => [[], ['_controller' => 'App\\Controller\\GroupUserOwn::index'], [], [['text', '/top/group_own']], [], []],
        'group_admin' => [[], ['_controller' => 'App\\Controller\\GroupUserAdmin::index'], [], [['text', '/top/group_admin']], [], []],
        'group_sub' => [[], ['_controller' => 'App\\Controller\\GroupSubscriptionsAdmin::index'], [], [['text', '/top/group_sub']], [], []],
        'group_all' => [[], ['_controller' => 'App\\Controller\\GroupAllAdmin::index'], [], [['text', '/top/group_all']], [], []],
        'wall' => [[], ['_controller' => 'App\\Controller\\WallController::index'], [], [['text', '/top/wall']], [], []],
        'wall_post_delete' => [['id'], ['_controller' => 'App\\Controller\\WallController::post_delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/wall/delete']], [], []],
        'wall_post_edit' => [['id'], ['_controller' => 'App\\Controller\\WallController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/wall/edit']], [], []],
        'wall_mass_delete' => [['uid'], ['_controller' => 'App\\Controller\\WallController::mass_delete'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/wall/cmd']], [], []],
        'wall_comment' => [['id'], ['_controller' => 'App\\Controller\\WallController::comment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/top/wall/comment']], [], []],
        'wall_comment_delete' => [['cid', 'wid'], ['_controller' => 'App\\Controller\\WallController::comment_delete'], [], [['variable', '/', '[^/]++', 'wid'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/wall/comment/delete']], [], []],
        'wall_comment_edit' => [['cid', 'wid'], ['_controller' => 'App\\Controller\\WallController::comment_edit'], [], [['variable', '/', '[^/]++', 'wid'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/wall/comment/edit']], [], []],
        'friends' => [[], ['_controller' => 'App\\Controller\\FriendsController::index'], [], [['text', '/top/friends']], [], []],
        'confirm' => [['fid', 'uid', 'pid'], ['_controller' => 'App\\Controller\\FriendsController::confirm'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['variable', '/', '[^/]++', 'fid'], ['text', '/top/friends/confirm']], [], []],
        'cancel' => [['fid'], ['_controller' => 'App\\Controller\\FriendsController::cancel'], [], [['variable', '/', '[^/]++', 'fid'], ['text', '/top/friends/cancel']], [], []],
        'removefriend' => [['uid', 'pid'], ['_controller' => 'App\\Controller\\FriendsController::remove'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/friends/remove']], [], []],
        'jq' => [[], ['_controller' => 'App\\Controller\\JQDemoController::index'], [], [['text', '/top/jq']], [], []],
        'jq2' => [['gid'], ['_controller' => 'App\\Controller\\JQDemoController2::index'], [], [['variable', '/', '[^/]++', 'gid'], ['text', '/top/jq2']], [], []],
        'anim' => [[], ['_controller' => 'App\\Controller\\AnimGifController::index'], [], [['text', '/top/anim']], [], []],
        'friends2' => [[], ['_controller' => 'App\\Controller\\Friends2Controller::index'], [], [['text', '/top/friends2']], [], []],
        'confirm2' => [['fid', 'uid', 'pid'], ['_controller' => 'App\\Controller\\Friends2Controller::confirm'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['variable', '/', '[^/]++', 'fid'], ['text', '/top/friends2/confirm']], [], []],
        'cancel2' => [['fid'], ['_controller' => 'App\\Controller\\Friends2Controller::cancel'], [], [['variable', '/', '[^/]++', 'fid'], ['text', '/top/friends2/cancel']], [], []],
        'removefriend2' => [['uid', 'pid'], ['_controller' => 'App\\Controller\\Friends2Controller::remove'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/friends2/remove']], [], []],
        'removefriendfromuserspace' => [['uid', 'pid'], ['_controller' => 'App\\Controller\\UserSpaceController::remove'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/remove']], [], []],
        'fromuserspaceadd' => [['uid', 'pid'], ['_controller' => 'App\\Controller\\UserSpaceController::add'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/add']], [], []],
        'cancelfriendrequest' => [['id', 'pid'], ['_controller' => 'App\\Controller\\UserSpaceController::cancel'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'id'], ['text', '/top/userspace/cancel']], [], []],
        'confirmfriendrequest' => [['fid', 'uid', 'pid'], ['_controller' => 'App\\Controller\\UserSpaceController::confirm'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'uid'], ['variable', '/', '[^/]++', 'fid'], ['text', '/top/userspace/confirm']], [], []],
        'userspacegallerycontent' => [['uid', 'gid'], ['_controller' => 'App\\Controller\\UserSpaceController::userspacegallerycontent'], [], [['variable', '/', '[^/]++', 'gid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/gallery']], [], []],
        'fromuserspacewall' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::fromuserspacewall'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/wall']], [], []],
        'userspace' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::index'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace']], [], []],
        'fromuserspacegallery' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallery'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/gallery']], [], []],
        'fromuserspacegallerycomment' => [['uid', 'imgid'], ['_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment'], [], [['variable', '/', '[^/]++', 'imgid'], ['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/gallerycomment']], [], []],
        'fromuserspacegallerycomment_delete' => [['imgid', 'fname'], ['_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_delete'], [], [['text', '/'], ['variable', '/', '[^/]++', 'fname'], ['variable', '/', '[^/]++', 'imgid'], ['text', '/top/userspace/gallerycomment/delete']], [], []],
        'fromuserspacegallerycomment_edit' => [['gcid', 'imgid'], ['_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_edit'], [], [['variable', '/', '[^/]++', 'imgid'], ['variable', '/', '[^/]++', 'gcid'], ['text', '/top/userspace/gallerycomment/edit']], [], []],
        'userspacewalledit' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::userspacewalledit'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/wall/edit']], [], []],
        'userspacewall_comment' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::userspacewall_comment'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/userspace/wall/comment']], [], []],
        'userspacecomment_delete' => [['cid', 'wid'], ['_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_delete'], [], [['variable', '/', '[^/]++', 'wid'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/userspace/wall/comment_delete']], [], []],
        'userspacecomment_edit' => [['cid', 'wid'], ['_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_edit'], [], [['variable', '/', '[^/]++', 'wid'], ['variable', '/', '[^/]++', 'cid'], ['text', '/top/userspace/wall/comment_edit']], [], []],
        'whits' => [['uid'], ['_controller' => 'App\\Controller\\UserSpaceController::whits'], [], [['variable', '/', '[^/]++', 'uid'], ['text', '/top/wcnt']], [], []],
        'hwi_oauth_service_redirect' => [['service'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction'], [], [['variable', '/', '[^/]++', 'service'], ['text', '/connect']], [], []],
        'hwi_oauth_connect_service' => [['service'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], [], [['variable', '/', '[^/]++', 'service'], ['text', '/connect/service']], [], []],
        'hwi_oauth_connect_registration' => [['key'], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], [], [['variable', '/', '[^/]++', 'key'], ['text', '/connect/registration']], [], []],
        'hwi_oauth_connect' => [[], ['_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction'], [], [['text', '/login/']], [], []],
        'facebook_login' => [[], [], [], [['text', '/connect/check-facebook']], [], []],
        'googleplus_login' => [[], [], [], [['text', '/connect/check-facebook']], [], []],
        'root_hello' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\RootHelloController::index'], [], [['variable', '/', '[^/]++', 'page']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
