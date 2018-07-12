<?php
$stmt = $pdo->query('SELECT * FROM users');

class User {
    // クラス変数
    public static $type = '';

    // インスタンス変数
    public $hp = $Weight;
    public $power = 1;

    function __construct($hp, $power) {
        $this->hp = $hp;
        $this->power = $power;
    }

    function name() {
        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している
        // （$this-> だとインスタンス変数を呼び出してしまう）
        return $this::$type;
    }

    function attack($user) {
        $user->hp = $user->hp - $this->power;
        print $this->name() . 'が' . $user->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;

        if ($user->hp <= 0) {
            $this->defeat($user);
        }
    }

    function defeat($user) {
        print $this->name() . 'は' . $user->name() . 'を倒した！' . PHP_EOL;
    }
}

class Slime extends User {
    // クラスの種類そのものなので、最初から代入して、以後変更しない
    public static $type = 'スライム';

    public $suffix = '';

    function __construct($suffix) {
        parent::__construct(10, 3);
        $this->suffix = $suffix;
    }

    function name() {
        // parent::name() は、 $this::$type を返すので、
        // この Slime クラスのクラス変数 $type ('スライム') を返す
        return parent::name() . $this->suffix;
    }

    // クラス関数
    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}

class Hero extends user {
    // クラスの種類そのものなので、最初から代入して、以後変更しない
    public static $type = '主人公';

    function __construct() {
        parent::__construct(1000, 30);
    }
    
    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}

$hero = new Hero();
$slime_A = new Slime('A');

$slime_A->attack($hero);
$hero->attack($slime_A);

Hero::description();
Slime::description();