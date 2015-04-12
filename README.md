# Yii2-redis
This component use [Redis library](https://github.com/phpredis/phpredis)

## Config

```
"components"=>[
  'rd'=>[
    'class'=>'\xezzus\yii\redis\Connection',
    'servers'=>[
      'main'=>['host'=>'127.0.0.1','port'=>'6379','auth'=>'1234567']
    ]
  ]
]
```

# Example

```
Yii::$app->rd->shard('main')->set('test',microtime(1));

var_dump(Yii::$app->rd->shard('main')->get('test'));
```
