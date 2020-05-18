<?php

use yii\db\Migration;

/**
 * Class m200517_173521_add_views
 */
class m200517_173521_add_views extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute(<<<'EOT'
        CREATE VIEW `lecture_audience` AS
        SELECT (audience.audience_width * audience.audience_length) AS `Площадь аудитории`, audience.number_of_seats as `Количество мест`, subdivision.name as `Название подразделения`
        FROM audience
        INNER JOIN subdivision ON audience.subdivision_id=subdivision.id;
        EOT
        );
        $this->execute(<<<'EOT'
        CREATE VIEW `buildings_list` AS SELECT building.name AS `Название здания`, COUNT(CASE WHEN audience_type.id=1 THEN 1 ELSE null END) AS `Количество лекционных аудиторий`, COUNT(CASE WHEN audience_type.id=2 THEN 1 ELSE null END) AS `Количество аудиторий для практических занятий`,
        COUNT(CASE WHEN audience_type.id=3 THEN 1 ELSE null END) AS `Количество компьютерных классов`
        FROM building 
        INNER JOIN subdivision ON building.id=subdivision.building_id
        INNER JOIN audience ON audience.subdivision_id=subdivision.id
        INNER JOIN audience_type ON audience.audience_type_id=audience_type.id
        GROUP BY building.name;
        EOT
        );
        $this->execute(<<<'EOT'
        CREATE VIEW `hierarchical_list` AS SELECT building.name AS `Название корпуса`,IFNULL(subdivision.name, "Не закреплено") AS `Название подразделения`, IFNULL(audience.audience_number, "Не закреплена") AS `Номер аудитории` FROM building 
        LEFT JOIN subdivision ON building.id=subdivision.building_id
        LEFT JOIN audience ON audience.subdivision_id=subdivision.id
        LEFT JOIN audience_type ON audience.audience_type_id=audience_type.id
        ORDER BY building.name,subdivision.name,audience.audience_number;   
        EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('DROP VIEW `lecture_audience`');
        $this->execute('DROP VIEW `buildings_list`');
        $this->execute('DROP VIEW `hierarchical_list`');
    }

}
