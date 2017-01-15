<?php

use Ffcms\Core\Migrations\MigrationInterface;
use Ffcms\Core\Migrations\Migration;

/**
 * Class demo_demo_table.
 */
class demo_demo_table extends Migration implements MigrationInterface
{
    /**
     * Execute actions when migration is up
     * @return void
     */
    public function up()
    {
        $this->getSchema()->create('demos', function($table) {
            $table->increments('id');
            $table->string('text', 1024);
            $table->timestamps();
        });
        parent::up();
    }

    /**
     * Seed created table via up() method with some data
     * @return void
     */
    public function seed()
    {
        $this->getConnection()->table('demos')->insert([
            ['text' => 'Hello world 1', 'created_at' => $this->now, 'updated_at' => $this->now],
            ['text' => 'Hello world 2', 'created_at' => $this->now, 'updated_at' => $this->now]
        ]);
    }

    /**
     * Execute actions when migration is down
     * @return void
     */
    public function down()
    {
        $this->getSchema()->dropIfExists('demos');
        parent::down();
    }
}