<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 */
class PostsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('posts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('id')
            ->maxLength('id', 32)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('channelId')
            ->maxLength('channelId', 128)
            ->requirePresence('channelId', 'create')
            ->notEmptyString('channelId');

        $validator
            ->scalar('thumbnails__default__url')
            ->maxLength('thumbnails__default__url', 512)
            ->allowEmptyString('thumbnails__default__url');

        $validator
            ->scalar('thumbnails__default__width')
            ->maxLength('thumbnails__default__width', 32)
            ->allowEmptyString('thumbnails__default__width');

        $validator
            ->scalar('thumbnails__default__height')
            ->maxLength('thumbnails__default__height', 32)
            ->allowEmptyString('thumbnails__default__height');

        $validator
            ->scalar('thumbnails__standard__url')
            ->maxLength('thumbnails__standard__url', 512)
            ->allowEmptyString('thumbnails__standard__url');

        $validator
            ->scalar('thumbnails__standard__width')
            ->maxLength('thumbnails__standard__width', 32)
            ->allowEmptyString('thumbnails__standard__width');

        $validator
            ->scalar('thumbnails__standard__height')
            ->maxLength('thumbnails__standard__height', 32)
            ->allowEmptyString('thumbnails__standard__height');

        $validator
            ->scalar('thumbnails__medium__url')
            ->maxLength('thumbnails__medium__url', 512)
            ->allowEmptyString('thumbnails__medium__url');

        $validator
            ->scalar('thumbnails__medium__width')
            ->maxLength('thumbnails__medium__width', 32)
            ->allowEmptyString('thumbnails__medium__width');

        $validator
            ->scalar('thumbnails__medium__height')
            ->maxLength('thumbnails__medium__height', 32)
            ->allowEmptyString('thumbnails__medium__height');

        $validator
            ->scalar('thumbnails__high__url')
            ->maxLength('thumbnails__high__url', 512)
            ->allowEmptyString('thumbnails__high__url');

        $validator
            ->scalar('thumbnails__high__width')
            ->maxLength('thumbnails__high__width', 32)
            ->allowEmptyString('thumbnails__high__width');

        $validator
            ->scalar('thumbnails__high__height')
            ->maxLength('thumbnails__high__height', 32)
            ->allowEmptyString('thumbnails__high__height');

        $validator
            ->scalar('thumbnails__maxres__url')
            ->maxLength('thumbnails__maxres__url', 512)
            ->allowEmptyString('thumbnails__maxres__url');

        $validator
            ->scalar('thumbnails__maxres__width')
            ->maxLength('thumbnails__maxres__width', 32)
            ->allowEmptyString('thumbnails__maxres__width');

        $validator
            ->scalar('thumbnails__maxres__height')
            ->maxLength('thumbnails__maxres__height', 32)
            ->allowEmptyString('thumbnails__maxres__height');

        $validator
            ->scalar('details__definition')
            ->maxLength('details__definition', 32)
            ->allowEmptyString('details__definition');

        $validator
            ->scalar('details__dimension')
            ->maxLength('details__dimension', 32)
            ->allowEmptyString('details__dimension');

        $validator
            ->boolean('details__caption')
            ->allowEmptyString('details__caption');

        $validator
            ->scalar('details__duration_raw')
            ->maxLength('details__duration_raw', 32)
            ->allowEmptyString('details__duration_raw');

        $validator
            ->scalar('details__duration')
            ->maxLength('details__duration', 32)
            ->allowEmptyString('details__duration');

        $validator
            ->scalar('details__projection')
            ->maxLength('details__projection', 64)
            ->allowEmptyString('details__projection');

        $validator
            ->scalar('status__privacyStatus')
            ->maxLength('status__privacyStatus', 32)
            ->allowEmptyString('status__privacyStatus');

        $validator
            ->scalar('title')
            ->maxLength('title', 512)
            ->allowEmptyString('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmptyString('description');

        $validator
            ->scalar('play_url')
            ->maxLength('play_url', 512)
            ->allowEmptyString('play_url');

        $validator
            ->scalar('embed_url')
            ->maxLength('embed_url', 512)
            ->allowEmptyString('embed_url');

        $validator
            ->dateTime('publishedAt')
            ->allowEmptyDateTime('publishedAt');

        $validator
            ->scalar('channelTitle')
            ->maxLength('channelTitle', 128)
            ->allowEmptyString('channelTitle');

        return $validator;
    }
}
