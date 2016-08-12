<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attempt extends Model {


    /**
     * Name of the table
     *
     * @var string
     */
    protected $table = 'attempts';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Id of the attempt's exam
     *
     * @var integer
     */
    protected $examId;

    /**
     * Id of attempt's user
     *
     * @var integer
     */
    protected $userId;

    /**
     * Start of attempt
     *
     * @var DateTime
     */
    protected $startedAt;

    /**
     * Finish of attempt
     *
     * @var DateTime
     */
    protected $finishedAt;

    /**
     * Total score of this attempt
     *
     * @var float
     */
    protected $score;

}
