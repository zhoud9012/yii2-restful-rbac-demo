<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                 //   ['label' => 'Yii2 API Template', 'options' => ['class' => 'header']],
                    ['label' => '管理员用户', 'icon' => ' fa-user-secret', 'url' => ['/adminuser/index']],
                    ['label' => '文章管理', 'icon' => ' fa-file-word-o', 'url' => ['/article/index']],
                    ['label' => '登录', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    
                    [
                        'label' => '权限管理',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => '创建角色', 'icon' => 'file-code-o', 'url' => ['/rbac/createrole'],],
                            ['label' => '角色列表', 'icon' => 'dashboard', 'url' => ['/rbac/roles'],],
                            ['label' => '创建规则', 'icon' => 'dashboard', 'url' => ['/rbac/createrule'],], 
  
                        ],
                    ],

                    [
                        'label' => '系统工具',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
  
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
