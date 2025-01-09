<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcEnvDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = [];
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), ['HEAD', 'GET'], true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/') {
            $pathinfo = $trimmedPathinfo === $pathinfo ? $pathinfo.'/' : $trimmedPathinfo;
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $pathinfo, array &$allow = [], array &$allowSchemes = []): array
    {
        $allow = $allowSchemes = [];
        $pathinfo = rawurldecode($pathinfo) ?: '/';
        $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo) {
            case '/login':
                // fos_user_security_login
                if ('/' !== $pathinfo && $trimmedPathinfo !== $pathinfo) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = [];
                    }
                    goto not_fos_user_security_login;
                }

                $ret = ['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'];
                if (!isset(($a = ['GET' => 0, 'POST' => 1])[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_security_login;
                }

                return $ret;
                not_fos_user_security_login:
                // hwi_oauth_connect
                if ('/' !== $pathinfo && $trimmedPathinfo === $pathinfo) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = [];
                    }
                    goto not_hwi_oauth_connect;
                }

                return ['_route' => 'hwi_oauth_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction'];
                not_hwi_oauth_connect:
                break;
            default:
                $routes = [
                    '/login_check' => [['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false],
                    '/logout' => [['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false],
                    '/profile' => [['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true],
                    '/profile/edit' => [['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false],
                    '/register' => [['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true],
                    '/register/check-email' => [['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false],
                    '/register/confirmed' => [['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false],
                    '/resetting/request' => [['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false],
                    '/resetting/send-email' => [['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false],
                    '/resetting/check-email' => [['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false],
                    '/profile/change-password' => [['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false],
                    '/top/settings' => [['_route' => 'user_settings', '_controller' => 'App\\Controller\\UserSettingsController::index'], null, null, null, false],
                    '/top/groups_mng' => [['_route' => 'groups_mng', '_controller' => 'App\\Controller\\GroupAdminController::index'], null, null, null, false],
                    '/top/groups_user' => [['_route' => 'group_user', '_controller' => 'App\\Controller\\GroupUserController::index'], null, null, null, false],
                    '/top/gallery' => [['_route' => 'gallery', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false],
                    '/top/gallery2' => [['_route' => 'gallery2', '_controller' => 'App\\Controller\\Gallery2Controller::index'], null, null, null, false],
                    '/top/userdel' => [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserDeleteController::index'], null, null, null, false],
                    '/top/userpassword' => [['_route' => 'user_password', '_controller' => 'App\\Controller\\UserPasswordController::index'], null, null, null, false],
                    '/top/useravatar' => [['_route' => 'user_avatar', '_controller' => 'App\\Controller\\UserAvatarController::index'], null, null, null, false],
                    '/top/usergallery' => [['_route' => 'user_gallery', '_controller' => 'App\\Controller\\UserGalleryController::index'], null, null, null, false],
                    '/top/usergalleryadd' => [['_route' => 'user_gallery_add', '_controller' => 'App\\Controller\\UserGalleryController::add'], null, null, null, false],
                    '/top/userprofile' => [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserProfileController::index'], null, null, null, false],
                    '/top/group_add' => [['_route' => 'group_add', '_controller' => 'App\\Controller\\GroupUserAdd::index'], null, null, null, false],
                    '/top/group_own' => [['_route' => 'group_own', '_controller' => 'App\\Controller\\GroupUserOwn::index'], null, null, null, false],
                    '/top/group_admin' => [['_route' => 'group_admin', '_controller' => 'App\\Controller\\GroupUserAdmin::index'], null, null, null, false],
                    '/top/group_sub' => [['_route' => 'group_sub', '_controller' => 'App\\Controller\\GroupSubscriptionsAdmin::index'], null, null, null, false],
                    '/top/group_all' => [['_route' => 'group_all', '_controller' => 'App\\Controller\\GroupAllAdmin::index'], null, null, null, false],
                    '/top/wall' => [['_route' => 'wall', '_controller' => 'App\\Controller\\WallController::index'], null, null, null, false],
                    '/top/friends' => [['_route' => 'friends', '_controller' => 'App\\Controller\\FriendsController::index'], null, null, null, false],
                    '/top/jq' => [['_route' => 'jq', '_controller' => 'App\\Controller\\JQDemoController::index'], null, null, null, false],
                    '/top/anim' => [['_route' => 'anim', '_controller' => 'App\\Controller\\AnimGifController::index'], null, null, null, false],
                    '/top/friends2' => [['_route' => 'friends2', '_controller' => 'App\\Controller\\Friends2Controller::index'], null, null, null, false],
                ];

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];
                if ('/' !== $pathinfo && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                    if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                        return $allow = $allowSchemes = [];
                    }
                    break;
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = [
            0 => '{^(?'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:36)'
                        .'|setting/reset/([^/]++)(*:65)'
                    .')'
                    .'|/show_d/([^/]++)/([^/]++)(*:98)'
                    .'|/top/(?'
                        .'|cnt(?:/([^/]++))?(*:130)'
                        .'|g(?'
                            .'|roup(?'
                                .'|s_(?'
                                    .'|mng/(?'
                                        .'|edit/([^/]++)(*:174)'
                                        .'|delete/([^/]++)(*:197)'
                                        .'|show/([^/]++)(*:218)'
                                        .'|admin_delete/([^/]++)/([^/]++)(*:256)'
                                    .')'
                                    .'|user/(?'
                                        .'|show/([^/]++)(*:286)'
                                        .'|edit/([^/]++)(*:307)'
                                    .')'
                                .')'
                                .'|_user/(?'
                                    .'|admin_delete/([^/]++)/([^/]++)(*:356)'
                                    .'|group_(?'
                                        .'|delete/([^/]++)(*:388)'
                                        .'|subscribe/([^/]++)(*:414)'
                                        .'|unsubscribe/([^/]++)(*:442)'
                                    .')'
                                .')'
                            .')'
                            .'|allery(?'
                                .'|co(?'
                                    .'|ntent(?'
                                        .'|/([^/]++)/([^/]++)(*:493)'
                                        .'|upload/([^/]++)/([^/]++)(*:525)'
                                        .'|del/([^/]++)/([^/]++)/([^/]++)(*:563)'
                                        .'|massdel/([^/]++)/([^/]++)(*:596)'
                                        .'|failure/([^/]++)(*:620)'
                                    .')'
                                    .'|mment/(?'
                                        .'|edit/([^/]++)/([^/]++)(*:660)'
                                        .'|([^/]++)/([^/]++)(*:685)'
                                        .'|delete/([^/]++)/([^/]++)/([^/]++)(*:726)'
                                    .')'
                                .')'
                                .'|albummassdelete/([^/]++)(*:760)'
                                .'|de(?'
                                    .'|lete/([^/]++)/([^/]++)(*:795)'
                                    .'|scset/([^/]++)/([^/]++)/([^/]++)(*:835)'
                                .')'
                                .'|setavatar/([^/]++)/([^/]++)/([^/]++)(*:880)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|/([^/]++)(?'
                                .'|(*:906)'
                                .'|/(?'
                                    .'|new(*:921)'
                                    .'|edit(*:933)'
                                    .'|([^/]++)/reply(*:955)'
                                .')'
                            .')'
                            .'|2/([^/]++)/([^/]++)(?'
                                .'|(*:987)'
                                .'|/(?'
                                    .'|new(*:1002)'
                                    .'|edit(*:1015)'
                                    .'|([^/]++)/reply(*:1038)'
                                    .'|delete(*:1053)'
                                .')'
                            .')'
                        .')'
                        .'|user(?'
                            .'|del_confirm/([^/]++)(*:1092)'
                            .'|space/(?'
                                .'|remove/([^/]++)/([^/]++)(*:1134)'
                                .'|add/([^/]++)/([^/]++)(*:1164)'
                                .'|c(?'
                                    .'|ancel/([^/]++)/([^/]++)(*:1200)'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:1242)'
                                .')'
                                .'|gallery/([^/]++)/([^/]++)(*:1277)'
                                .'|wall/([^/]++)(*:1299)'
                                .'|([^/]++)(*:1316)'
                                .'|gallery(?'
                                    .'|/([^/]++)(*:1344)'
                                    .'|comment/(?'
                                        .'|([^/]++)/([^/]++)(*:1381)'
                                        .'|delete/([^/]++)/([^/]++)(*:1414)'
                                        .'|edit/([^/]++)/([^/]++)(*:1445)'
                                    .')'
                                .')'
                                .'|wall/(?'
                                    .'|edit/([^/]++)(*:1477)'
                                    .'|comment(?'
                                        .'|/([^/]++)(*:1505)'
                                        .'|_(?'
                                            .'|delete/([^/]++)/([^/]++)(*:1542)'
                                            .'|edit/([^/]++)/([^/]++)(*:1573)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|w(?'
                            .'|all/(?'
                                .'|delete/([^/]++)(*:1613)'
                                .'|edit/([^/]++)(*:1635)'
                                .'|c(?'
                                    .'|md/([^/]++)(*:1659)'
                                    .'|omment/(?'
                                        .'|([^/]++)(*:1686)'
                                        .'|delete/([^/]++)/([^/]++)(*:1719)'
                                        .'|edit/([^/]++)/([^/]++)(*:1750)'
                                    .')'
                                .')'
                            .')'
                            .'|cnt/([^/]++)(*:1774)'
                        .')'
                        .'|friends(?'
                            .'|/(?'
                                .'|c(?'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:1835)'
                                    .'|ancel/([^/]++)(*:1858)'
                                .')'
                                .'|remove/([^/]++)/([^/]++)(*:1892)'
                            .')'
                            .'|2/(?'
                                .'|c(?'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:1944)'
                                    .'|ancel/([^/]++)(*:1967)'
                                .')'
                                .'|remove/([^/]++)/([^/]++)(*:2001)'
                            .')'
                        .')'
                        .'|jq2/([^/]++)(*:2024)'
                    .')'
                    .'|/connect/(?'
                        .'|([^/]++)(*:2054)'
                        .'|service/([^/]++)(*:2079)'
                        .'|registration/([^/]++)(*:2109)'
                        .'|check\\-facebook(?'
                            .'|(*:2136)'
                        .')'
                    .')'
                    .'|/([^/]++)?(*:2157)'
                .')/?$}sD',
        ];

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 2136:
                        // facebook_login
                        if ('/' !== $pathinfo && $trimmedPathinfo !== $pathinfo) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = [];
                            }
                            goto not_facebook_login;
                        }

                        return ['_route' => 'facebook_login'];
                        not_facebook_login:

                        // googleplus_login
                        if ('/' !== $pathinfo && $trimmedPathinfo !== $pathinfo) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = [];
                            }
                            goto not_googleplus_login;
                        }

                        return ['_route' => 'googleplus_login'];
                        not_googleplus_login:

                        break;
                    default:
                        $routes = [
                            36 => [['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true],
                            65 => [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true],
                            98 => [['_route' => 'show_discuss', '_controller' => 'App\\Controller\\ShowDiscussController::index'], ['name', 'page'], null, null, false, true],
                            130 => [['_route' => 'hello_world', 'page' => 1, '_controller' => 'App\\Controller\\HelloWorldController::hello'], ['page'], null, null, false, true],
                            174 => [['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupAdminController::edit'], ['id'], null, null, false, true],
                            197 => [['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupAdminController::delete'], ['id'], null, null, false, true],
                            218 => [['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupAdminController::show'], ['id'], null, null, false, true],
                            256 => [['_route' => 'admin_delete', '_controller' => 'App\\Controller\\GroupAdminController::admindelete'], ['groupid', 'userid'], null, null, false, true],
                            286 => [['_route' => 'group_user_show', '_controller' => 'App\\Controller\\GroupUserController::show'], ['id'], null, null, false, true],
                            307 => [['_route' => 'group_user_edit', '_controller' => 'App\\Controller\\GroupUserController::edit'], ['id'], null, null, false, true],
                            356 => [['_route' => 'group_user_admin_delete', '_controller' => 'App\\Controller\\GroupUserController::admindelete'], ['groupid', 'userid'], null, null, false, true],
                            388 => [['_route' => 'group_user_delete', '_controller' => 'App\\Controller\\GroupUserController::delete'], ['id'], null, null, false, true],
                            414 => [['_route' => 'group_user_subscribe', '_controller' => 'App\\Controller\\GroupUserController::subscribe'], ['groupid'], null, null, false, true],
                            442 => [['_route' => 'group_user_unsubscribe', '_controller' => 'App\\Controller\\GroupUserController::unsubscribe'], ['groupid'], null, null, false, true],
                            493 => [['_route' => 'user_gallery_content', '_controller' => 'App\\Controller\\UserGalleryController::content'], ['uid', 'gid'], null, null, false, true],
                            525 => [['_route' => 'user_gallery_content_upload', '_controller' => 'App\\Controller\\UserGalleryController::contentupload'], ['uid', 'gid'], null, null, false, true],
                            563 => [['_route' => 'user_gallery_content_delete', '_controller' => 'App\\Controller\\UserGalleryController::contentdelete'], ['uid', 'gid', 'file'], null, null, false, true],
                            596 => [['_route' => 'user_gallery_content_mass_delete', '_controller' => 'App\\Controller\\UserGalleryController::contentmassdelete'], ['uid', 'gid'], null, null, false, true],
                            620 => [['_route' => 'user_gallery_content_failure', '_controller' => 'App\\Controller\\UserGalleryController::contentfailure'], ['unknown'], null, null, false, true],
                            660 => [['_route' => 'user_gallery_comment_edit', '_controller' => 'App\\Controller\\UserGalleryController::comment_edit'], ['gcid', 'imgid'], null, null, false, true],
                            685 => [['_route' => 'user_gallery_comment', '_controller' => 'App\\Controller\\UserGalleryController::comment'], ['uid', 'imgid'], null, null, false, true],
                            726 => [['_route' => 'user_gallery_comment_delete', '_controller' => 'App\\Controller\\UserGalleryController::comment_delete'], ['uid', 'imgid', 'fname'], null, null, true, true],
                            760 => [['_route' => 'user_gallery_album_mass_delete', '_controller' => 'App\\Controller\\UserGalleryController::albummassdelete'], ['uid'], null, null, false, true],
                            795 => [['_route' => 'user_gallery_delete', '_controller' => 'App\\Controller\\UserGalleryController::gallerydelete'], ['uid', 'gid'], null, null, false, true],
                            835 => [['_route' => 'user_gallery_title_set', '_controller' => 'App\\Controller\\UserGalleryController::gallerytitleset'], ['uid', 'gid', 'file'], null, null, false, true],
                            880 => [['_route' => 'user_gallery_setavatar', '_controller' => 'App\\Controller\\UserGalleryController::setavatar'], ['uid', 'gid', 'id'], null, null, true, true],
                            906 => [['_route' => 'discuss', '_controller' => 'App\\Controller\\GroupContentController::index'], ['name'], null, null, false, true],
                            921 => [['_route' => 'discuss_new', '_controller' => 'App\\Controller\\GroupContentController::new'], ['id'], null, null, true, false],
                            933 => [['_route' => 'discuss_edit', '_controller' => 'App\\Controller\\GroupContentController::edit'], ['id'], null, null, false, false],
                            955 => [['_route' => 'discuss_reply', '_controller' => 'App\\Controller\\GroupContentController::reply'], ['cid', 'gid'], null, null, false, false],
                            987 => [['_route' => 'discuss2', '_controller' => 'App\\Controller\\GroupContent2Controller::index'], ['name', 'page'], null, null, false, true],
                            1002 => [['_route' => 'discuss2_new', '_controller' => 'App\\Controller\\GroupContent2Controller::new'], ['id', 'page'], null, null, false, false],
                            1015 => [['_route' => 'discuss2_edit', '_controller' => 'App\\Controller\\GroupContent2Controller::edit'], ['id', 'page'], null, null, false, false],
                            1038 => [['_route' => 'discuss2_reply', '_controller' => 'App\\Controller\\GroupContent2Controller::reply'], ['cid', 'page', 'gid'], null, null, false, false],
                            1053 => [['_route' => 'discuss2_delete', '_controller' => 'App\\Controller\\GroupContent2Controller::delete'], ['id', 'page'], null, null, false, false],
                            1092 => [['_route' => 'user_delete_confirm', '_controller' => 'App\\Controller\\UserDeleteController::confirm'], ['uid'], null, null, false, true],
                            1134 => [['_route' => 'removefriendfromuserspace', '_controller' => 'App\\Controller\\UserSpaceController::remove'], ['uid', 'pid'], null, null, false, true],
                            1164 => [['_route' => 'fromuserspaceadd', '_controller' => 'App\\Controller\\UserSpaceController::add'], ['uid', 'pid'], null, null, false, true],
                            1200 => [['_route' => 'cancelfriendrequest', '_controller' => 'App\\Controller\\UserSpaceController::cancel'], ['id', 'pid'], null, null, false, true],
                            1242 => [['_route' => 'confirmfriendrequest', '_controller' => 'App\\Controller\\UserSpaceController::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            1277 => [['_route' => 'userspacegallerycontent', '_controller' => 'App\\Controller\\UserSpaceController::userspacegallerycontent'], ['uid', 'gid'], null, null, false, true],
                            1299 => [['_route' => 'fromuserspacewall', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacewall'], ['uid'], null, null, false, true],
                            1316 => [['_route' => 'userspace', '_controller' => 'App\\Controller\\UserSpaceController::index'], ['uid'], null, null, false, true],
                            1344 => [['_route' => 'fromuserspacegallery', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallery'], ['uid'], null, null, false, true],
                            1381 => [['_route' => 'fromuserspacegallerycomment', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment'], ['uid', 'imgid'], null, null, false, true],
                            1414 => [['_route' => 'fromuserspacegallerycomment_delete', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_delete'], ['imgid', 'fname'], null, null, true, true],
                            1445 => [['_route' => 'fromuserspacegallerycomment_edit', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_edit'], ['gcid', 'imgid'], null, null, false, true],
                            1477 => [['_route' => 'userspacewalledit', '_controller' => 'App\\Controller\\UserSpaceController::userspacewalledit'], ['uid'], null, null, false, true],
                            1505 => [['_route' => 'userspacewall_comment', '_controller' => 'App\\Controller\\UserSpaceController::userspacewall_comment'], ['uid'], null, null, false, true],
                            1542 => [['_route' => 'userspacecomment_delete', '_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_delete'], ['cid', 'wid'], null, null, false, true],
                            1573 => [['_route' => 'userspacecomment_edit', '_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_edit'], ['cid', 'wid'], null, null, false, true],
                            1613 => [['_route' => 'wall_post_delete', '_controller' => 'App\\Controller\\WallController::post_delete'], ['id'], null, null, false, true],
                            1635 => [['_route' => 'wall_post_edit', '_controller' => 'App\\Controller\\WallController::edit'], ['id'], null, null, false, true],
                            1659 => [['_route' => 'wall_mass_delete', '_controller' => 'App\\Controller\\WallController::mass_delete'], ['uid'], null, null, false, true],
                            1686 => [['_route' => 'wall_comment', '_controller' => 'App\\Controller\\WallController::comment'], ['id'], null, null, false, true],
                            1719 => [['_route' => 'wall_comment_delete', '_controller' => 'App\\Controller\\WallController::comment_delete'], ['cid', 'wid'], null, null, false, true],
                            1750 => [['_route' => 'wall_comment_edit', '_controller' => 'App\\Controller\\WallController::comment_edit'], ['cid', 'wid'], null, null, false, true],
                            1774 => [['_route' => 'whits', '_controller' => 'App\\Controller\\UserSpaceController::whits'], ['uid'], null, null, false, true],
                            1835 => [['_route' => 'confirm', '_controller' => 'App\\Controller\\FriendsController::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            1858 => [['_route' => 'cancel', '_controller' => 'App\\Controller\\FriendsController::cancel'], ['fid'], null, null, false, true],
                            1892 => [['_route' => 'removefriend', '_controller' => 'App\\Controller\\FriendsController::remove'], ['uid', 'pid'], null, null, false, true],
                            1944 => [['_route' => 'confirm2', '_controller' => 'App\\Controller\\Friends2Controller::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            1967 => [['_route' => 'cancel2', '_controller' => 'App\\Controller\\Friends2Controller::cancel'], ['fid'], null, null, false, true],
                            2001 => [['_route' => 'removefriend2', '_controller' => 'App\\Controller\\Friends2Controller::remove'], ['uid', 'pid'], null, null, false, true],
                            2024 => [['_route' => 'jq2', '_controller' => 'App\\Controller\\JQDemoController2::index'], ['gid'], null, null, false, true],
                            2054 => [['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction'], ['service'], null, null, false, true],
                            2079 => [['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], null, null, false, true],
                            2109 => [['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], null, null, false, true],
                            2157 => [['_route' => 'root_hello', 'page' => 1, '_controller' => 'App\\Controller\\RootHelloController::index'], ['page'], null, null, false, true],
                        ];

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash, $hasTrailingVar) = $routes[$m];

                        $hasTrailingVar = $trimmedPathinfo !== $pathinfo && $hasTrailingVar;
                        if ('/' !== $pathinfo && !$hasTrailingVar && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                            if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                                return $allow = $allowSchemes = [];
                            }
                            break;
                        }
                        if ($hasTrailingSlash && $hasTrailingVar && preg_match($regex, rtrim($matchedPathinfo, '/') ?: '/', $n) && $m === (int) $n['MARK']) {
                            $matches = $n;
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (2157 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return [];
    }
}
