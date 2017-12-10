<?php
/*

������ģʽ����һ����Ľӿ�ת���ɿͻ�ϣ��������һ���ӿڡ�Adapterģʽʹ��ԭ�����ڽӿڲ����ݶ�����һ��������Щ�����һ������

�ٸ����ӣ������ļ��õ������õı�׼��ѹ��110V���������й��ļ��õ�����׼��ѹ��220V���ң����Ǽ�ͥ������220V���������������ǰ�����Ѱ������������һЩ�ҵ�����������������ѹ���ʺϣ����Ƿ������ﲻ�ã�����ȥ�����˷���Դ������������Ҫ��취������Щ�ҵ��������������ǾͿ���ȥ�г���һ����ѹ��������220V�ĵ����ӽ�ȥ�����ӳ����Ļ��Զ���ѹ��110V����ô�����ѹ�������䵱�Ľ�ɫ���ǣ�����������ʵ���Ƶ������кܶ࣬����ӵ�����ADSL����Ҳ��Ҫһ����������Ȼ��һ���ӵ绰��һ����Model�������У������������ѹ����Ϊ���ӣ��Դ���ķ�ʽ��˵����
*/

interface Target {
    function get110Power();
    function get338Power();
}


//220�Ĳ�ͷ
class Power {
    public function get220Power(){
        return 220;
    }
}

class Adapter extends Power implements Target {

    //��ѹ����
    public function get110Power() {
        return $this->get220Power() - 110;
    }
    public function get338Power() {
        return $this->get220Power() + 118;
    }

}


//����
$it = new Adapter();
$power = $it->get110Power();
$power = $it->get338Power();
echo power;