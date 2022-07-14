<?php 

namespace app\components;
use yii\base\Widget;
use app\models\View;

class ViewWidget extends Widget{

    public $tpl;
    public $data;
    public $tree;
    public $viewHtml;

    public function init(){
        parent::init();
        if( $this->tpl === null ){
            $this->tpl = 'view';
        }

        $this->tpl .= '.php';
    }

    public function run(){
        $this->data = View::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->viewHtml = $this->getViewHtml($this->tree);
        return $this->viewHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
        }
        return $tree;

    }

    protected function getViewHtml($tree){
        $str = '';
        foreach ($tree as $view){
            $str .= $this->catToTemplate($view);
        }
        return $str;
    }

    protected function catToTemplate($view){
        ob_start();
        include __DIR__ . '/view_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}