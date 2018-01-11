<?php
namespace backend\widgets\sidebar;

/**
 * 后台siderbar插件
 */
use Yii;
use yii\base\Widget;
use yii\widgets\Menu;

class SidebarWidget extends Menu
{    
    public $submenuTemplate = "\n<ul class=\"children\">\n{items}\n</ul>\n";
    
    public $options = ['class'=>'nav nav-pills nav-stacked nav-quirk'];
    
    public $activateParents = true;
    
    public function init()
    {
        $this->items = [
            ['label' =>'<a href=""><i class="fa fa-th-list"></i><span>场馆管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'网球馆管理','url'=>['post/index']
                    ],
                ]
            ],
            ['label' =>'<a href=""><i class="fa fa-user"></i><span>会员管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'会员信息','url'=>['user/index']],
                ]
            ],
        ];
    }
}