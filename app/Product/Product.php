<?php
/**************************************************/
/*Product.php                                     */
/*================================================*/
/*   BACK-END API IN PHP WITH LARAVEL FRAMEWORK   */
/*================================================*/
/*                   Credits                      */
/*              Valdemir Valance Jr               */
/*================================================*/
/*                Social Linktree                 */
/*         linktr.ee/valdemirvalencajr            */
/**************************************************/

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'product_desc', 'product_img',
    ];
}
