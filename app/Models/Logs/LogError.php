<?php
namespace App\Models\Logs;

use App\Components\Model;

/***
 * Class LogError
 * @package App\Models\Accounts
 * @property integer $id
 * @property string $action
 * @property string $file
 * @property integer $line
 * @property integer $code
 * @property string $message
 * @property string $created_at
 */
class LogError extends Model
{
    const FB_GET_ACCESS_TOKEN = 'facebook get access token';
    const FB_GET_ME = 'facebook get me';

    protected $table = 'log_error';

    protected $fillable = [
        'id',
        'action',
        'file',
        'line',
        'code',
        'message',
    ];

    /**
     * @param string $action
     * @param \Exception $exception
     */
    public static function logException(string $action, \Exception $exception) : void
    {
        $log = new self();
        $log->action = $action;
        $log->file = $exception->getFile();
        $log->line = $exception->getLine();
        $log->code = $exception->getCode();
        $log->message = $exception->getMessage();
        $log->save();
    }
}
