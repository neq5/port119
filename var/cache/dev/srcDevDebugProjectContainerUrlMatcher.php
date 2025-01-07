<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                    '/_profiler' => [['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true],
                    '/_profiler/search' => [['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false],
                    '/_profiler/search_bar' => [['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false],
                    '/_profiler/phpinfo' => [['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false],
                    '/_profiler/open' => [['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false],
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
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:104)'
                        .'|wdt/([^/]++)(*:124)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                    .'|/show_d/([^/]++)/([^/]++)(*:262)'
                    .'|/top/(?'
                        .'|cnt(?:/([^/]++))?(*:295)'
                        .'|g(?'
                            .'|roup(?'
                                .'|s_(?'
                                    .'|mng/(?'
                                        .'|edit/([^/]++)(*:339)'
                                        .'|delete/([^/]++)(*:362)'
                                        .'|show/([^/]++)(*:383)'
                                        .'|admin_delete/([^/]++)/([^/]++)(*:421)'
                                    .')'
                                    .'|user/(?'
                                        .'|show/([^/]++)(*:451)'
                                        .'|edit/([^/]++)(*:472)'
                                    .')'
                                .')'
                                .'|_user/(?'
                                    .'|admin_delete/([^/]++)/([^/]++)(*:521)'
                                    .'|group_(?'
                                        .'|delete/([^/]++)(*:553)'
                                        .'|subscribe/([^/]++)(*:579)'
                                        .'|unsubscribe/([^/]++)(*:607)'
                                    .')'
                                .')'
                            .')'
                            .'|allery(?'
                                .'|co(?'
                                    .'|ntent(?'
                                        .'|/([^/]++)/([^/]++)(*:658)'
                                        .'|upload/([^/]++)/([^/]++)(*:690)'
                                        .'|del/([^/]++)/([^/]++)/([^/]++)(*:728)'
                                        .'|massdel/([^/]++)/([^/]++)(*:761)'
                                        .'|failure/([^/]++)(*:785)'
                                    .')'
                                    .'|mment/(?'
                                        .'|edit/([^/]++)/([^/]++)(*:825)'
                                        .'|([^/]++)/([^/]++)(*:850)'
                                        .'|delete/([^/]++)/([^/]++)/([^/]++)(*:891)'
                                    .')'
                                .')'
                                .'|albummassdelete/([^/]++)(*:925)'
                                .'|de(?'
                                    .'|lete/([^/]++)/([^/]++)(*:960)'
                                    .'|scset/([^/]++)/([^/]++)/([^/]++)(*:1000)'
                                .')'
                                .'|setavatar/([^/]++)/([^/]++)/([^/]++)(*:1046)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|/([^/]++)(?'
                                .'|(*:1073)'
                                .'|/(?'
                                    .'|new(*:1089)'
                                    .'|edit(*:1102)'
                                    .'|([^/]++)/reply(*:1125)'
                                .')'
                            .')'
                            .'|2/([^/]++)/([^/]++)(?'
                                .'|(*:1158)'
                                .'|/(?'
                                    .'|new(*:1174)'
                                    .'|edit(*:1187)'
                                    .'|([^/]++)/reply(*:1210)'
                                    .'|delete(*:1225)'
                                .')'
                            .')'
                        .')'
                        .'|user(?'
                            .'|del_confirm/([^/]++)(*:1264)'
                            .'|space/(?'
                                .'|remove/([^/]++)/([^/]++)(*:1306)'
                                .'|add/([^/]++)/([^/]++)(*:1336)'
                                .'|c(?'
                                    .'|ancel/([^/]++)/([^/]++)(*:1372)'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:1414)'
                                .')'
                                .'|gallery/([^/]++)/([^/]++)(*:1449)'
                                .'|wall/([^/]++)(*:1471)'
                                .'|([^/]++)(*:1488)'
                                .'|gallery(?'
                                    .'|/([^/]++)(*:1516)'
                                    .'|comment/(?'
                                        .'|([^/]++)/([^/]++)(*:1553)'
                                        .'|delete/([^/]++)/([^/]++)(*:1586)'
                                        .'|edit/([^/]++)/([^/]++)(*:1617)'
                                    .')'
                                .')'
                                .'|wall/(?'
                                    .'|edit/([^/]++)(*:1649)'
                                    .'|comment(?'
                                        .'|/([^/]++)(*:1677)'
                                        .'|_(?'
                                            .'|delete/([^/]++)/([^/]++)(*:1714)'
                                            .'|edit/([^/]++)/([^/]++)(*:1745)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|w(?'
                            .'|all/(?'
                                .'|delete/([^/]++)(*:1785)'
                                .'|edit/([^/]++)(*:1807)'
                                .'|c(?'
                                    .'|md/([^/]++)(*:1831)'
                                    .'|omment/(?'
                                        .'|([^/]++)(*:1858)'
                                        .'|delete/([^/]++)/([^/]++)(*:1891)'
                                        .'|edit/([^/]++)/([^/]++)(*:1922)'
                                    .')'
                                .')'
                            .')'
                            .'|cnt/([^/]++)(*:1946)'
                        .')'
                        .'|friends(?'
                            .'|/(?'
                                .'|c(?'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:2007)'
                                    .'|ancel/([^/]++)(*:2030)'
                                .')'
                                .'|remove/([^/]++)/([^/]++)(*:2064)'
                            .')'
                            .'|2/(?'
                                .'|c(?'
                                    .'|onfirm/([^/]++)/([^/]++)/([^/]++)(*:2116)'
                                    .'|ancel/([^/]++)(*:2139)'
                                .')'
                                .'|remove/([^/]++)/([^/]++)(*:2173)'
                            .')'
                        .')'
                        .'|jq2/([^/]++)(*:2196)'
                    .')'
                    .'|/connect/(?'
                        .'|([^/]++)(*:2226)'
                        .'|service/([^/]++)(*:2251)'
                        .'|registration/([^/]++)(*:2281)'
                        .'|check\\-facebook(?'
                            .'|(*:2308)'
                        .')'
                    .')'
                    .'|/([^/]++)?(*:2329)'
                .')/?$}sD',
        ];

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 2308:
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
                            104 => [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true],
                            124 => [['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true],
                            170 => [['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false],
                            184 => [['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false],
                            204 => [['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false],
                            217 => [['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false],
                            227 => [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true],
                            262 => [['_route' => 'show_discuss', '_controller' => 'App\\Controller\\ShowDiscussController::index'], ['name', 'page'], null, null, false, true],
                            295 => [['_route' => 'hello_world', 'page' => 1, '_controller' => 'App\\Controller\\HelloWorldController::hello'], ['page'], null, null, false, true],
                            339 => [['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupAdminController::edit'], ['id'], null, null, false, true],
                            362 => [['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupAdminController::delete'], ['id'], null, null, false, true],
                            383 => [['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupAdminController::show'], ['id'], null, null, false, true],
                            421 => [['_route' => 'admin_delete', '_controller' => 'App\\Controller\\GroupAdminController::admindelete'], ['groupid', 'userid'], null, null, false, true],
                            451 => [['_route' => 'group_user_show', '_controller' => 'App\\Controller\\GroupUserController::show'], ['id'], null, null, false, true],
                            472 => [['_route' => 'group_user_edit', '_controller' => 'App\\Controller\\GroupUserController::edit'], ['id'], null, null, false, true],
                            521 => [['_route' => 'group_user_admin_delete', '_controller' => 'App\\Controller\\GroupUserController::admindelete'], ['groupid', 'userid'], null, null, false, true],
                            553 => [['_route' => 'group_user_delete', '_controller' => 'App\\Controller\\GroupUserController::delete'], ['id'], null, null, false, true],
                            579 => [['_route' => 'group_user_subscribe', '_controller' => 'App\\Controller\\GroupUserController::subscribe'], ['groupid'], null, null, false, true],
                            607 => [['_route' => 'group_user_unsubscribe', '_controller' => 'App\\Controller\\GroupUserController::unsubscribe'], ['groupid'], null, null, false, true],
                            658 => [['_route' => 'user_gallery_content', '_controller' => 'App\\Controller\\UserGalleryController::content'], ['uid', 'gid'], null, null, false, true],
                            690 => [['_route' => 'user_gallery_content_upload', '_controller' => 'App\\Controller\\UserGalleryController::contentupload'], ['uid', 'gid'], null, null, false, true],
                            728 => [['_route' => 'user_gallery_content_delete', '_controller' => 'App\\Controller\\UserGalleryController::contentdelete'], ['uid', 'gid', 'file'], null, null, false, true],
                            761 => [['_route' => 'user_gallery_content_mass_delete', '_controller' => 'App\\Controller\\UserGalleryController::contentmassdelete'], ['uid', 'gid'], null, null, false, true],
                            785 => [['_route' => 'user_gallery_content_failure', '_controller' => 'App\\Controller\\UserGalleryController::contentfailure'], ['unknown'], null, null, false, true],
                            825 => [['_route' => 'user_gallery_comment_edit', '_controller' => 'App\\Controller\\UserGalleryController::comment_edit'], ['gcid', 'imgid'], null, null, false, true],
                            850 => [['_route' => 'user_gallery_comment', '_controller' => 'App\\Controller\\UserGalleryController::comment'], ['uid', 'imgid'], null, null, false, true],
                            891 => [['_route' => 'user_gallery_comment_delete', '_controller' => 'App\\Controller\\UserGalleryController::comment_delete'], ['uid', 'imgid', 'fname'], null, null, true, true],
                            925 => [['_route' => 'user_gallery_album_mass_delete', '_controller' => 'App\\Controller\\UserGalleryController::albummassdelete'], ['uid'], null, null, false, true],
                            960 => [['_route' => 'user_gallery_delete', '_controller' => 'App\\Controller\\UserGalleryController::gallerydelete'], ['uid', 'gid'], null, null, false, true],
                            1000 => [['_route' => 'user_gallery_title_set', '_controller' => 'App\\Controller\\UserGalleryController::gallerytitleset'], ['uid', 'gid', 'file'], null, null, false, true],
                            1046 => [['_route' => 'user_gallery_setavatar', '_controller' => 'App\\Controller\\UserGalleryController::setavatar'], ['uid', 'gid', 'id'], null, null, true, true],
                            1073 => [['_route' => 'discuss', '_controller' => 'App\\Controller\\GroupContentController::index'], ['name'], null, null, false, true],
                            1089 => [['_route' => 'discuss_new', '_controller' => 'App\\Controller\\GroupContentController::new'], ['id'], null, null, true, false],
                            1102 => [['_route' => 'discuss_edit', '_controller' => 'App\\Controller\\GroupContentController::edit'], ['id'], null, null, false, false],
                            1125 => [['_route' => 'discuss_reply', '_controller' => 'App\\Controller\\GroupContentController::reply'], ['cid', 'gid'], null, null, false, false],
                            1158 => [['_route' => 'discuss2', '_controller' => 'App\\Controller\\GroupContent2Controller::index'], ['name', 'page'], null, null, false, true],
                            1174 => [['_route' => 'discuss2_new', '_controller' => 'App\\Controller\\GroupContent2Controller::new'], ['id', 'page'], null, null, false, false],
                            1187 => [['_route' => 'discuss2_edit', '_controller' => 'App\\Controller\\GroupContent2Controller::edit'], ['id', 'page'], null, null, false, false],
                            1210 => [['_route' => 'discuss2_reply', '_controller' => 'App\\Controller\\GroupContent2Controller::reply'], ['cid', 'page', 'gid'], null, null, false, false],
                            1225 => [['_route' => 'discuss2_delete', '_controller' => 'App\\Controller\\GroupContent2Controller::delete'], ['id', 'page'], null, null, false, false],
                            1264 => [['_route' => 'user_delete_confirm', '_controller' => 'App\\Controller\\UserDeleteController::confirm'], ['uid'], null, null, false, true],
                            1306 => [['_route' => 'removefriendfromuserspace', '_controller' => 'App\\Controller\\UserSpaceController::remove'], ['uid', 'pid'], null, null, false, true],
                            1336 => [['_route' => 'fromuserspaceadd', '_controller' => 'App\\Controller\\UserSpaceController::add'], ['uid', 'pid'], null, null, false, true],
                            1372 => [['_route' => 'cancelfriendrequest', '_controller' => 'App\\Controller\\UserSpaceController::cancel'], ['id', 'pid'], null, null, false, true],
                            1414 => [['_route' => 'confirmfriendrequest', '_controller' => 'App\\Controller\\UserSpaceController::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            1449 => [['_route' => 'userspacegallerycontent', '_controller' => 'App\\Controller\\UserSpaceController::userspacegallerycontent'], ['uid', 'gid'], null, null, false, true],
                            1471 => [['_route' => 'fromuserspacewall', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacewall'], ['uid'], null, null, false, true],
                            1488 => [['_route' => 'userspace', '_controller' => 'App\\Controller\\UserSpaceController::index'], ['uid'], null, null, false, true],
                            1516 => [['_route' => 'fromuserspacegallery', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallery'], ['uid'], null, null, false, true],
                            1553 => [['_route' => 'fromuserspacegallerycomment', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment'], ['uid', 'imgid'], null, null, false, true],
                            1586 => [['_route' => 'fromuserspacegallerycomment_delete', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_delete'], ['imgid', 'fname'], null, null, true, true],
                            1617 => [['_route' => 'fromuserspacegallerycomment_edit', '_controller' => 'App\\Controller\\UserSpaceController::fromuserspacegallerycomment_edit'], ['gcid', 'imgid'], null, null, false, true],
                            1649 => [['_route' => 'userspacewalledit', '_controller' => 'App\\Controller\\UserSpaceController::userspacewalledit'], ['uid'], null, null, false, true],
                            1677 => [['_route' => 'userspacewall_comment', '_controller' => 'App\\Controller\\UserSpaceController::userspacewall_comment'], ['uid'], null, null, false, true],
                            1714 => [['_route' => 'userspacecomment_delete', '_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_delete'], ['cid', 'wid'], null, null, false, true],
                            1745 => [['_route' => 'userspacecomment_edit', '_controller' => 'App\\Controller\\UserSpaceController::userspacecomment_edit'], ['cid', 'wid'], null, null, false, true],
                            1785 => [['_route' => 'wall_post_delete', '_controller' => 'App\\Controller\\WallController::post_delete'], ['id'], null, null, false, true],
                            1807 => [['_route' => 'wall_post_edit', '_controller' => 'App\\Controller\\WallController::edit'], ['id'], null, null, false, true],
                            1831 => [['_route' => 'wall_mass_delete', '_controller' => 'App\\Controller\\WallController::mass_delete'], ['uid'], null, null, false, true],
                            1858 => [['_route' => 'wall_comment', '_controller' => 'App\\Controller\\WallController::comment'], ['id'], null, null, false, true],
                            1891 => [['_route' => 'wall_comment_delete', '_controller' => 'App\\Controller\\WallController::comment_delete'], ['cid', 'wid'], null, null, false, true],
                            1922 => [['_route' => 'wall_comment_edit', '_controller' => 'App\\Controller\\WallController::comment_edit'], ['cid', 'wid'], null, null, false, true],
                            1946 => [['_route' => 'whits', '_controller' => 'App\\Controller\\UserSpaceController::whits'], ['uid'], null, null, false, true],
                            2007 => [['_route' => 'confirm', '_controller' => 'App\\Controller\\FriendsController::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            2030 => [['_route' => 'cancel', '_controller' => 'App\\Controller\\FriendsController::cancel'], ['fid'], null, null, false, true],
                            2064 => [['_route' => 'removefriend', '_controller' => 'App\\Controller\\FriendsController::remove'], ['uid', 'pid'], null, null, false, true],
                            2116 => [['_route' => 'confirm2', '_controller' => 'App\\Controller\\Friends2Controller::confirm'], ['fid', 'uid', 'pid'], null, null, false, true],
                            2139 => [['_route' => 'cancel2', '_controller' => 'App\\Controller\\Friends2Controller::cancel'], ['fid'], null, null, false, true],
                            2173 => [['_route' => 'removefriend2', '_controller' => 'App\\Controller\\Friends2Controller::remove'], ['uid', 'pid'], null, null, false, true],
                            2196 => [['_route' => 'jq2', '_controller' => 'App\\Controller\\JQDemoController2::index'], ['gid'], null, null, false, true],
                            2226 => [['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction'], ['service'], null, null, false, true],
                            2251 => [['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], null, null, false, true],
                            2281 => [['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], null, null, false, true],
                            2329 => [['_route' => 'root_hello', 'page' => 1, '_controller' => 'App\\Controller\\RootHelloController::index'], ['page'], null, null, false, true],
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

                if (2329 === $m) {
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
