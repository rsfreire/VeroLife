<?php if ( comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
} ?>

<?php if ( have_comments() ) : ?>
	<div id="comments" class="comments">
		<h3 class="separator-title">
			<span>
				<?php comments_number(
					__( 'Nenhum comentário', 'willow' ),
					__( '1 comentário', 'willow' ),
					__( '% comentários', 'willow' )
				); ?>
			</span>
		</h3>

		<ul class="comments-list">
			<?php wp_list_comments( array( 'callback' => 'willow_wp_list_comments_callback' ) ); ?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav class="pager">
			<div class="nav-previous"><?php previous_comments_link( __( '&laquo; Comentários anteriores', 'willow' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Próximos comentários &raquo;', 'willow' ) ); ?></div>
		</nav>
		<?php endif; ?>

	</div>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? ' aria-required="true"' : '' );

	$fields['author'] = '
		<div class="respond-author-field form-group">
			<input class="form-control" placeholder="' . __( 'Nome', 'willow' ) . '" id="respond-author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' autocomplete="off" />
		</div>
	';

	$fields['email'] = '
		<div class="respond-author-field form-group">
			<input class="form-control" placeholder="' . __( 'Email', 'willow' ) . '" id="respond-email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $aria_req . ' autocomplete="off" />
		</div>
	';

	$fields['url'] = '
		<div class="respond-author-field last form-group">
			<input class="form-control" placeholder="' . __( 'Website', 'willow' ) . '" id="respond-url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" autocomplete="off" />
		</div>
	';

	$comment = '
		<div class="respond-comment form-group">
			<textarea class="form-control" placeholder="' . __( 'Deixe um comentário&hellip;', 'willow' ) . '" id="respond-comment" name="comment" rows="4" aria-required="true" autocomplete="off"></textarea>
		</div>
	';

	$must_log_in = '
		<p class="respond-must-log-in">' . sprintf( __( 'Você precisa estar <a href="%s">logado</a> para postar um comentário.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>
	';

	$logged_in_as = '
		<p class="respond-logged-in-as">' . sprintf( __( 'Logado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Sair desta conta">Sair?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>
	';

	$comment_notes_before = '';
	$comment_notes_after = '';

	comment_form( array(
		'fields'               => $fields,
		'comment_field'        => $comment,
		'must_log_in'          => $must_log_in,
		'logged_in_as'         => $logged_in_as,
		'comment_notes_before' => $comment_notes_before,
		'comment_notes_after'  => $comment_notes_after,
		'id_form'              => 'respond-form',
		'id_submit'            => 'respond-submit-hidden',
		'title_reply'          => __( 'Deixe um comentário', 'willow' ),
		'title_reply_to'       => __( 'Deixe um comentário para %s', 'willow' ),
		'cancel_reply_link'    => __( 'Cancelar comentário', 'willow' ),
		'label_submit'         => __( 'Publicar comentário', 'willow' ),
	) ); ?>

<?php endif; ?>