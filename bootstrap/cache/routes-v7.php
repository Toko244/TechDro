<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.base_route',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.action_route',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gRhQpCTPiqi8akJP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HP5Nb58PDyQuTc91',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/message/([^/]++)(*:107)|/([^/]++)/livewire/message/([^/]++)(*:150)|/livewire/preview\\-file/([^/]++)(*:190)|/([^/]++)/(?|register(?|(*:222))|log(?|out(?|(*:243))|in(?|(*:257)))|password/(?|reset(?|(*:287)|/([^/]++)(*:304)|(*:312))|email(*:326)|confirm(?|(*:344)))|admin(?|/(?|s(?|ub(?|scribers(?|/(?|export(*:396)|delete/([^/]++)(*:419))|(*:428))|mission(?|s(*:448)|/(?|([^/]++)(*:468)|destroy/([^/]++)(*:492))))|e(?|ction(?|s(?|(*:519)|/(?|create(?|(*:540))|edit/([^/]++)(?|(*:565))|destroy/([^/]++)(*:590)|arrange(*:605)))|/(?|Delete(?|Image/([^/]++)(*:642)|Cover/([^/]++)(*:664))|get\\-sections(?:/([^/]++))?(*:700)|([^/]++)/posts(*:722)|fetching\\-posts(*:745)|([^/]++)/posts/create(?|(*:777))|posts/(?|([^/]++)/(?|edit(?|(*:814))|delete(*:829))|d(?|elete\\-(?|image(?|/([^/]++)(*:869)|\\-(?|lang/([^/]++)(*:895)|multiple/([^/]++)(*:920)))|pin/([^/]++)(*:942))|isplay\\-image/([^/]++)(*:973))|DeleteFile/([^/]++)(*:1001))))|ttings/edit(?|(*:1027))))|u(?|sers(?|(*:1050)|/(?|add(?|(*:1069))|edit/([^/]++)(?|(*:1095))|show/([^/]++)(*:1118)|logs/([^/]++)(*:1140)|([^/]++)/authentication\\-logs(*:1178)|destroy/([^/]++)(*:1203)))|p(?|date_profile(*:1230)|load/image(?|(*:1252)|/delete(?|(*:1271)))))|profile(?|(*:1294))|forms(?|(*:1312)|/(?|create(*:1331)|store(*:1345)|edit/([^/]++)(*:1367)|update/([^/]++)(*:1391)|destroy/([^/]++)(?|(*:1419)|(*:1428))|arrange(*:1445)))|banners/([^/]++)(?|(*:1475)|/(?|create(?|(*:1497))|edit(?|(*:1514))|delete(*:1530)))|component(?|/(?|([^/]++)/posts/create(*:1578)|create(?|(*:1596))|([^/]++)/(?|edit(?|(*:1625))|destroy(*:1642))|arrange(*:1659)|DeleteImage/([^/]++)(*:1688)|check\\-unique(*:1710))|s(*:1721)|Posts/(?|([^/]++)(*:1747)|create(?|/([^/]++)(*:1774)|(*:1783))|delete/([^/]++)(*:1808))|able/(?|sort(*:1830)|([^/]++)(*:1847)|post/(?|([^/]++)(*:1872)|create/([^/]++)(?|(*:1899)))|create/([^/]++)(?|(*:1928)|(*:1937))|edit(?|/([^/]++)(*:1963)|(*:1972))|arrange(*:1989)|delete/([^/]++)(*:2013)))|directories/(?|([^/]++)(?|(*:2050)|/(?|create(?|(*:2072))|edit(?|(*:2089))|delete(*:2105)))|arrange(*:2123))|languages/edit(?|(*:2150)))|(*:2161))|s(?|ub(?|mission(*:2187)|scribe(*:2202))|earch(*:2217)))|/([^/]++)?(*:2238)|/([^/]++)/(?|(.*)(*:2264)|front(*:2278)|photo(*:2292)|contact(*:2308)|text\\-page(*:2327)|home\\-page(*:2346)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gRamvNqSzjTBWpsa',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5YJbMiChDIXVicDv',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZN87qKhBOTtw3lsP',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWC9AAxSfUqIc6JV',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kkthUweQ4wobUF4',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3eDf6737aij0oHas',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1rASsdDAEbZY5qn',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VHs1zi5dMHkGCfnS',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xPWenpNtDJ49Xj7y',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fqu49eFAnQ5uJOZY',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Klvl6jt9TePDXdsi',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TPKQRi5dm04KV8MW',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zLbmP5vRRNuDNGNN',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GwsDWWeITPq3xLnD',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QLV7FWGMbUHIqSUt',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EmmKr7bvFQnhpcXl',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.deleteimg',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'que',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.deletecover',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'que',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-sections',
            'locale' => NULL,
            'sectionType' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sectionType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.fetching',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'section_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'section_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.delete-image',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.delete-image-lang',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-image-multiple',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.delete-pin',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'display-image',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.DeleteFile',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'que',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7pkD7mnyWpLZYHvW',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ae2rpAx12tQMZmWL',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VtkbNLUADhWmHmrA',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BxRvPclfuQwmNJ48',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Lny0gJZ5m8QtO6M',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V6sQQ165cboWZkR8',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authentication.logs',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SRmEGVhZcBcCpPNY',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateProfile',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.upload',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.del',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'image.clear',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asdasdsa',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SA0LiKCISO2QB0zn',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.destroy.formField',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'formField',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3XEMUact2U2ZxvZA',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'component.post.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'component_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WWit2MxrYbpDmxid',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'component.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u87Fo90I1xfpCInb',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GMgBbKloSK0WO80I',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L5KGBtXJrwWbHZai',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZKh99b1NkCgm87q',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'component.deleteimg',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'que',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mm7PMZfI1c6MEHdC',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'components.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentPosts.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'component_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7C7fiyAk0QihP5I5',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'component_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'component.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentPosts.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentable.sort',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentable.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.componentable.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.componentable',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.componentable.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentable.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'section_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'componentable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5oolDLtupaJxayj2',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'componentable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PhwN7vaNqSqVcTGd',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submission',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::avGXp1SBcOgKU3db',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nEeo4p4aM866nOwp',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'all',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xNHdWzAKtu8QpVhS',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HK1nYsDi8heo7uX5',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::65C3PofbmxLv29pU',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hMKkj0hA97hmpANC',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Af7eO5t0m1zZC5D',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.base_route' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.base_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.action_route' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.action_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gRhQpCTPiqi8akJP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::gRhQpCTPiqi8akJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HP5Nb58PDyQuTc91' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::HP5Nb58PDyQuTc91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YJbMiChDIXVicDv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::5YJbMiChDIXVicDv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZN87qKhBOTtw3lsP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::ZN87qKhBOTtw3lsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gRamvNqSzjTBWpsa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::gRamvNqSzjTBWpsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWC9AAxSfUqIc6JV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::NWC9AAxSfUqIc6JV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7kkthUweQ4wobUF4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7kkthUweQ4wobUF4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1rASsdDAEbZY5qn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::D1rASsdDAEbZY5qn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3eDf6737aij0oHas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3eDf6737aij0oHas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7pkD7mnyWpLZYHvW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7pkD7mnyWpLZYHvW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ae2rpAx12tQMZmWL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ae2rpAx12tQMZmWL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VtkbNLUADhWmHmrA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VtkbNLUADhWmHmrA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Lny0gJZ5m8QtO6M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@show',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6Lny0gJZ5m8QtO6M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V6sQQ165cboWZkR8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::V6sQQ165cboWZkR8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BxRvPclfuQwmNJ48' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BxRvPclfuQwmNJ48',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authentication.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/{user}/authentication-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@showAuthenticationLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@showAuthenticationLogs',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'authentication.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SRmEGVhZcBcCpPNY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SRmEGVhZcBcCpPNY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'asdasdsa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'asdasdsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SA0LiKCISO2QB0zn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SA0LiKCISO2QB0zn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateProfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'updateProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/forms/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/edit/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '{locale?}/admin/forms/update/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/forms/destroy/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.destroy.formField' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/destroy/{formField}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@destroyFormField',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@destroyFormField',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.destroy.formField',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3XEMUact2U2ZxvZA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/forms/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3XEMUact2U2ZxvZA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.del' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.del',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Klvl6jt9TePDXdsi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Klvl6jt9TePDXdsi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TPKQRi5dm04KV8MW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TPKQRi5dm04KV8MW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zLbmP5vRRNuDNGNN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zLbmP5vRRNuDNGNN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GwsDWWeITPq3xLnD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GwsDWWeITPq3xLnD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QLV7FWGMbUHIqSUt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QLV7FWGMbUHIqSUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EmmKr7bvFQnhpcXl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EmmKr7bvFQnhpcXl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.deleteimg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/DeleteImage/{que}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@DeleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@DeleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.deleteimg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.deletecover' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/DeleteCover/{que}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@DeleteCover',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@DeleteCover',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.deletecover',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-sections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/get-sections/{sectionType?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@getSections',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@getSections',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'get-sections',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{sec}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.fetching' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/fetching-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@fetching',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@fetching',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.fetching',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{section_id}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{component_id}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/{section_id}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.delete-image' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/delete-image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.delete-image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.delete-image-lang' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/delete-image-lang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImagelang',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImagelang',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.delete-image-lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-image-multiple' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/delete-image-multiple/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImagemulti',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deleteImagemulti',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'delete-image-multiple',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.DeleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/DeleteFile/{que}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@DeleteFile',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@DeleteFile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.DeleteFile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'display-image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/display-image/{post_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@displayImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@displayImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'display-image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.delete-pin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/posts/delete-pin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deletepin',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deletepin',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.delete-pin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VHs1zi5dMHkGCfnS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VHs1zi5dMHkGCfnS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xPWenpNtDJ49Xj7y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xPWenpNtDJ49Xj7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fqu49eFAnQ5uJOZY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/destroy/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Fqu49eFAnQ5uJOZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhwN7vaNqSqVcTGd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PhwN7vaNqSqVcTGd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'components.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/components',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'components.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WWit2MxrYbpDmxid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WWit2MxrYbpDmxid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u87Fo90I1xfpCInb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u87Fo90I1xfpCInb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GMgBbKloSK0WO80I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GMgBbKloSK0WO80I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L5KGBtXJrwWbHZai' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::L5KGBtXJrwWbHZai',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZKh99b1NkCgm87q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zZKh99b1NkCgm87q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.deleteimg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/DeleteImage/{que}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@DeleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@DeleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.deleteimg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mm7PMZfI1c6MEHdC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/check-unique',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@CheckName',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@CheckName',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mm7PMZfI1c6MEHdC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentPosts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentPosts/{component_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentPosts.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7C7fiyAk0QihP5I5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentPosts/create/{component_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7C7fiyAk0QihP5I5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentPosts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentPosts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentPosts/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentPosts.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentable.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@sort',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@sort',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentable.sort',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentable.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentable.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.componentable.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/post/{post_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.componentable.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.componentable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/post/create/{post_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.componentable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/create/{section_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentable.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.componentable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/post/create/{post_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.componentable.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/edit/{componentable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '{locale?}/admin/componentable/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@udpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@udpdate',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5oolDLtupaJxayj2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5oolDLtupaJxayj2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/delete/{componentable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'submission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::avGXp1SBcOgKU3db' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'controller' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::avGXp1SBcOgKU3db',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nEeo4p4aM866nOwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/{all}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::nEeo4p4aM866nOwp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'all' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xNHdWzAKtu8QpVhS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/front',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:268:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {
    return \\view(\'website.front\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008b20000000000000000";}";s:4:"hash";s:44:"occ28VyHtGnx0GhdMX8vylsFiqR4l7j3bLikMflrIe8=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::xNHdWzAKtu8QpVhS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HK1nYsDi8heo7uX5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:268:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {
    return \\view(\'website.photo\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008b40000000000000000";}";s:4:"hash";s:44:"opS86X9nyWfNY5HX9bhkDbFCPh9qbNEUz/9D3C0EP8s=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::HK1nYsDi8heo7uX5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::65C3PofbmxLv29pU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'website.contact\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008b60000000000000000";}";s:4:"hash";s:44:"VGp5401rFtYeKKpd1R2f7ONmw+5ZDYX48d7v+x8/R2k=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::65C3PofbmxLv29pU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hMKkj0hA97hmpANC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/text-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
    return \\view(\'website.text-page\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008b80000000000000000";}";s:4:"hash";s:44:"vsR9a+NZW61OU1q/KppsKF7pU57EGxwKSAB7YlByEf0=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::hMKkj0hA97hmpANC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Af7eO5t0m1zZC5D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:267:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function () {
    return \\view(\'website.home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ba0000000000000000";}";s:4:"hash";s:44:"vk41b7LPKwFdUnl1n7QGhXLHG9mBrDDfifCci4+cb5k=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::2Af7eO5t0m1zZC5D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
