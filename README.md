<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Laravel Module-18

     --  Meet Eloquent ORM
   
        1. Eloquent is an object-relational mapper (ORM)
        2. Eloquent models represent database tables.
        3. Models can be used to perform operations on data
        4. Eloquent also supports relationships between models
        5. It provides layer between application and database
   

### Naming Convention = 01

        1. Table name: brands Model name: Brand
        2. Table name: product_details Model name: ProductDetails
        3. If we follow this convention no need to define table name inside model. Other wise we need to define.

    ```bash
    class Flight extends Model{
        protected $table = 'my_flights';
    }
        
    ```

### Naming Convention = 02

1. Model assume that corresponding database table has a primary key column named id.
2. Eloquent assumes that the primary key is an incrementing integer value
3. If necessary, you may define a protected $primaryKey property

 ```bash
    class Flight extends Model{
        protected $primaryKey = 'flight_id';
    }     
```      

 ```bash
    public $incrementing = false;    
```    

 ```bash
    protected $keyType = 'string';     
```    
### Naming Convention = 03

1. Model expects created_at and updated_at columns exist on corresponding database table.
2. Eloquent will automatically set these column's values when models are created or updated.
3. If you do not want timestamp automatically managed by Eloquent, you should define a $timestamps property false.

 ```bash
    class Flight extends Model{
        protected $timestamps = false;
    } 
```
### Naming Convention = 04

1. By default model instance will not contain any attribute values.
2. But you can define an $attributes property on your model as you want.

```bash
    class Brand extends Model{
        protected $attributes =[
            "brandName" => "default name',
            "brandImg" => 'default img',
        ]
    }
```
