<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Article;
use App\Model\Entity\User;
use Authorization\Identity;

/**
 * Article policy
 */
class ArticlePolicy
{
    protected function isAuthor(Identity $user, Article $article)
    {
        return $article->user_id === $user->getIdentifier();
    }
    /**
     * Check if $user can add Article
     *
     * @param \Authorization\Identity $user
     * @param \App\Model\Entity\Article $article
     * @return bool
     */
    public function canAdd(Identity $user, Article $article)
    {
        return true;
    }

    /**
     * Check if $user can edit Article
     *
     * @param \Authorization\Identity $user
     * @param \App\Model\Entity\Article $article
     * @return bool
     */
    public function canEdit(Identity $user, Article $article)
    {
        return $this->isAuthor($user, $article);
    }

    /**
     * Check if $user can delete Article
     *
     * @param \Authorization\Identity $user
     * @param \App\Model\Entity\Article $article
     * @return bool
     */
    public function canDelete(User $user, Article $article)
    {
        return $this->isAuthor($user, $article);
    }

    /**
     * Check if $user can view Article
     *
     * @param \Authorization\Identity $user
     * @param \App\Model\Entity\Article $article
     * @return bool
     */
    public function canView(Identity $user, Article $article)
    {
    }
}
