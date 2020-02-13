<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author: AK
 * Date: 4/13/18
 * @copyright AK
 */

/**
 * App\SavingAccount
 *
 * @property integer $id
 * @property string $name
 * @property string $ssn
 * @property string $phone
 * @property integer $child_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereSsn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereChildId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SavingAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SavingAccount extends Model
{
    //
}
