<?php

namespace App\Helpers;

use Module,
    Config,
    Lang;

class Menu {

    public function __construct() {
        //
    }

//    public function getAdminMenu() {
//        $oModules = Module::all();
//        $aModules = [];
//
//        $mainAdimMenus = Config::get('mycp.admin_menu', []);
//        foreach ($mainAdimMenus as $mainAdimMenu) {
//
//            foreach ($mainAdimMenu['subMenus'] as &$subMenu) {
//                $subMenu['title'] = trans('general.' . $subMenu['title']);
//                if (empty($subMenu['route'])) {
//                    $subMenu['route'] = '#';
//                } else {
//                    $subMenu['route'] = route($subMenu['route']);
//                }
//            }
//            $menuTab = [
//                'route' => $mainAdimMenu['route'],
//                'icon' => $mainAdimMenu['icon'],
//                'title' => trans('general.' . $mainAdimMenu['title']),
//                'menu' => $mainAdimMenu['subMenus'],
//            ];
//            $aModules[] = $menuTab;
//        }
//        if (count($oModules)) {
//            foreach ($oModules as $sName => $oModule) {
//                $sLowerName = strtolower($sName);
//                $bIsAdmin = Config::get($sLowerName . '.is_admin');
//
//                if ($bIsAdmin) {
//                    $sRoute = Config::get($sLowerName . '.route');
//                    $aSubMenus = Config::get($sLowerName . '.admin_menu', []);
//                    if (count($aSubMenus)) {
//                        foreach ($aSubMenus as &$aSubMenu) {
//                            $aSubMenu['title'] = trans($sLowerName . '::' . $sLowerName . '.' . $aSubMenu['title']);
//                            if (empty($aSubMenu['route'])) {
//                                $aSubMenu['route'] = '#';
//                            } else {
//                                $aSubMenu['route'] = route($aSubMenu['route']);
//                            }
//                        }
//                    }
//
//                    if (empty($sRoute)) {
//                        $sRoute = '#';
//                    } else {
//                        $sRoute = route($sRoute);
//                    }
//
//                    $aModule = [
//                        'route' => $sRoute,
//                        'icon' => Config::get($sLowerName . '.icon'),
//                        'title' => trans($sLowerName . '::' . $sLowerName . '.ModuleTitle'),
//                        'menu' => $aSubMenus,
//                    ];
//                    $aModules[] = $aModule;
//                }
//            }
//        }
//        return $aModules;
//    }

    public function getClientMenu() {
//        dd( Config::get('mycp.client_menu'));
//        return Config::get('mycp.client_menu');

        $aModules = [];

        $mainClientMenus = Config::get('mycp.client_menu', []);
        foreach ($mainClientMenus as $mainClientMenu) {

            foreach ($mainClientMenu['subMenus'] as &$subMenu) {
                $subMenu['title'] = trans('general.' . $subMenu['title']);
                if (empty($subMenu['route'])) {
                    $subMenu['route'] = '#';
                } else {
                    $subMenu['route'] = route($subMenu['route']);
                }
            }
            $menuTab = [
                'route' => $mainClientMenu['route'],
                'icon' => $mainClientMenu['icon'],
                'title' => trans('general.' . $mainClientMenu['title']),
                'menu' => $mainClientMenu['subMenus'],
            ];
            $aModules[] = $menuTab;
        }

        return $aModules;
    }

}
