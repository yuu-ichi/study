<?php
declare(strict_types=1);

namespace App\Model\Entity;

use ArrayAccess;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Authentication\IdentityInterface;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Article[] $articles
 */
class User extends Entity implements IdentityInterface
{

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'email' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'articles' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return null;
    }

    protected function _getIsAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    /**
     * Authentication\IdentityInterface method
     */
    public function getIdentifier(): int
    {
        return $this->id;
    }
    /**
     * Authentication\IdentityInterface method
     */
    public function getOriginalData(): ArrayAccess
    {
        return $this;
    }
}
