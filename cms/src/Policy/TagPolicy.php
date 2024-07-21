<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Tag;
use Authorization\Identity;

/**
 * Tag policy
 */
class TagPolicy
{
    private function isAdmin(Identity $user)
    {
        return $user->is_admin;
    }

    /**
     * Check if $user can add Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canAdd(Identity $user, Tag $tag)
    {
        return $this->isAdmin($user);
    }

    /**
     * Check if $user can edit Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canEdit(Identity $user, Tag $tag)
    {
        return $this->isAdmin($user);
    }

    /**
     * Check if $user can delete Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canDelete(Identity $user, Tag $tag)
    {
        return $this->isAdmin($user);
    }

    /**
     * Check if $user can view Tag
     *
     * @param \Authorization\Identity $user The user.
     * @param \App\Model\Entity\Tag $tag
     * @return bool
     */
    public function canView(Identity $user, Tag $tag)
    {
        return true;
    }
}
