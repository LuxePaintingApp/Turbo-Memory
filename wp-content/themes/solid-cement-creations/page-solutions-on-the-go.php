<?php
/**
 * Template Name: Solutions On The Go Landing
 * Template Post Type: page
 * Description: High-converting sales page for the Solutions On The Go service.
 *
 * @package Solid_Cement_Creations
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'sotg-landing-page' ); ?>>
            <section class="sotg-hero">
                <div class="container">
                    <p class="sotg-kicker"><?php esc_html_e( 'Got a problem with no solution?', 'solid-cement' ); ?></p>
                    <h1 class="sotg-title"><?php esc_html_e( 'Solutions On The Go', 'solid-cement' ); ?></h1>
                    <p class="sotg-subtitle"><?php esc_html_e( 'We deliver simple, actionable answers to your toughest problems within 3 hours — your first solution is on us.', 'solid-cement' ); ?></p>
                    <div class="sotg-cta">
                        <a class="btn" href="#sotg-intake-form"><?php esc_html_e( 'Get My Free Solution', 'solid-cement' ); ?></a>
                        <span class="sotg-guarantee"><?php esc_html_e( 'Need it faster? Express replies in 30 minutes for just $20.', 'solid-cement' ); ?></span>
                    </div>
                    <div class="sotg-trust-signals">
                        <span><?php esc_html_e( '✔ First solution free', 'solid-cement' ); ?></span>
                        <span><?php esc_html_e( '✔ 3-hour turnaround guarantee', 'solid-cement' ); ?></span>
                        <span><?php esc_html_e( '✔ Human experts, no bots', 'solid-cement' ); ?></span>
                    </div>
                </div>
            </section>

            <section class="sotg-problem-scenarios">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e( 'When life gets complicated, we make the next step obvious.', 'solid-cement' ); ?></h2>
                    <div class="sotg-scenario-grid">
                        <article class="sotg-scenario-card">
                            <h3><?php esc_html_e( 'Personal dilemmas', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'From tough conversations to daily routines, we craft action plans that bring clarity fast.', 'solid-cement' ); ?></p>
                        </article>
                        <article class="sotg-scenario-card">
                            <h3><?php esc_html_e( 'Workplace challenges', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'Navigate sticky projects, prepare responses, or plan your next move with confidence.', 'solid-cement' ); ?></p>
                        </article>
                        <article class="sotg-scenario-card">
                            <h3><?php esc_html_e( 'Everyday "how do I" questions', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'We break big tasks into simple steps so you can take action immediately.', 'solid-cement' ); ?></p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sotg-offer">
                <div class="container">
                    <div class="sotg-offer-card">
                        <span class="sotg-offer-badge"><?php esc_html_e( 'Fast. Friendly. Focused on solutions.', 'solid-cement' ); ?></span>
                        <h2><?php esc_html_e( 'Here’s how Solutions On The Go works', 'solid-cement' ); ?></h2>
                        <ol class="sotg-steps">
                            <li>
                                <h3><?php esc_html_e( 'Tell us your problem', 'solid-cement' ); ?></h3>
                                <p><?php esc_html_e( 'Submit your situation in a simple form — the more detail you give, the better we can help.', 'solid-cement' ); ?></p>
                            </li>
                            <li>
                                <h3><?php esc_html_e( 'We craft your action plan', 'solid-cement' ); ?></h3>
                                <p><?php esc_html_e( 'A real human strategist reviews your request and builds a step-by-step response within 3 hours.', 'solid-cement' ); ?></p>
                            </li>
                            <li>
                                <h3><?php esc_html_e( 'You get moving again', 'solid-cement' ); ?></h3>
                                <p><?php esc_html_e( 'Receive a clear, prioritized solution by email. Ask a quick follow-up if you need extra clarity.', 'solid-cement' ); ?></p>
                            </li>
                        </ol>
                        <div class="sotg-price-callout">
                            <div>
                                <p class="sotg-price-kicker"><?php esc_html_e( 'Intro offer', 'solid-cement' ); ?></p>
                                <p class="sotg-price-main"><?php esc_html_e( 'First solution free', 'solid-cement' ); ?></p>
                                <p class="sotg-price-note"><?php esc_html_e( 'Every solution after that is just $50 — or add $20 to jump the line for a 30 minute turnaround.', 'solid-cement' ); ?></p>
                            </div>
                            <a class="btn" href="#sotg-intake-form"><?php esc_html_e( 'Start Solving Now', 'solid-cement' ); ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sotg-proof">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e( 'Real people. Real momentum.', 'solid-cement' ); ?></h2>
                    <div class="sotg-proof-grid">
                        <blockquote>
                            <p>&ldquo;<?php esc_html_e( 'I was stuck on how to respond to a difficult client. Within two hours I had a script that saved the project.', 'solid-cement' ); ?>&rdquo;</p>
                            <cite>&mdash; <?php esc_html_e( 'Monica, marketing consultant', 'solid-cement' ); ?></cite>
                        </blockquote>
                        <blockquote>
                            <p>&ldquo;<?php esc_html_e( 'They broke down my stressful move into a weekend checklist. I actually enjoyed getting it done.', 'solid-cement' ); ?>&rdquo;</p>
                            <cite>&mdash; <?php esc_html_e( 'Andre, busy parent', 'solid-cement' ); ?></cite>
                        </blockquote>
                        <blockquote>
                            <p>&ldquo;<?php esc_html_e( 'The express add-on was worth every dollar. 25 minutes later I had a plan ready to present to leadership.', 'solid-cement' ); ?>&rdquo;</p>
                            <cite>&mdash; <?php esc_html_e( 'Priya, operations lead', 'solid-cement' ); ?></cite>
                        </blockquote>
                    </div>
                </div>
            </section>

            <section class="sotg-intake" id="sotg-intake-form">
                <div class="container">
                    <div class="sotg-intake-inner">
                        <div class="sotg-intake-copy">
                            <span class="sotg-kicker"><?php esc_html_e( 'Ready when you are', 'solid-cement' ); ?></span>
                            <h2><?php esc_html_e( 'Tell us what's going on — we'll handle the next step.', 'solid-cement' ); ?></h2>
                            <ul class="sotg-intake-points">
                                <li><?php esc_html_e( 'Free for your first problem — risk free and no strings attached.', 'solid-cement' ); ?></li>
                                <li><?php esc_html_e( 'Standard delivery within 3 hours, guaranteed.', 'solid-cement' ); ?></li>
                                <li><?php esc_html_e( 'Need speed? Tick the express option for a 30 minute solution at $20.', 'solid-cement' ); ?></li>
                            </ul>
                        </div>
                        <form class="sotg-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                            <?php wp_nonce_field( 'sotg_submit_problem', 'sotg_nonce' ); ?>
                            <input type="hidden" name="action" value="sotg_submit_problem">
                            <div class="form-control">
                                <label for="sotg-name"><?php esc_html_e( 'Your name', 'solid-cement' ); ?></label>
                                <input type="text" id="sotg-name" name="sotg_name" placeholder="<?php esc_attr_e( 'How should we address you?', 'solid-cement' ); ?>" required>
                            </div>
                            <div class="form-control">
                                <label for="sotg-email"><?php esc_html_e( 'Email for your solution', 'solid-cement' ); ?></label>
                                <input type="email" id="sotg-email" name="sotg_email" placeholder="<?php esc_attr_e( 'name@example.com', 'solid-cement' ); ?>" required>
                            </div>
                            <div class="form-control">
                                <label for="sotg-problem"><?php esc_html_e( 'Describe your problem', 'solid-cement' ); ?></label>
                                <textarea id="sotg-problem" name="sotg_problem" placeholder="<?php esc_attr_e( 'Share the context, what you've tried, and what a win looks like.', 'solid-cement' ); ?>" required></textarea>
                            </div>
                            <div class="form-control">
                                <label for="sotg-priority"><?php esc_html_e( 'How fast do you need help?', 'solid-cement' ); ?></label>
                                <select id="sotg-priority" name="sotg_priority">
                                    <option value="standard"><?php esc_html_e( 'Standard (Free for first, $50 afterward)', 'solid-cement' ); ?></option>
                                    <option value="express"><?php esc_html_e( 'Express (+$20) — reply within 30 minutes', 'solid-cement' ); ?></option>
                                </select>
                            </div>
                            <div class="form-control">
                                <label for="sotg-outcome"><?php esc_html_e( 'What outcome would feel like a win?', 'solid-cement' ); ?></label>
                                <input type="text" id="sotg-outcome" name="sotg_outcome" placeholder="<?php esc_attr_e( 'E.g. "Have a ready-to-send email" or "Know my next three steps"', 'solid-cement' ); ?>">
                            </div>
                            <?php do_action( 'sotg_after_form_fields' ); ?>
                            <button type="submit" class="btn"><?php esc_html_e( 'Send My Problem', 'solid-cement' ); ?></button>
                            <p class="sotg-form-footer"><?php esc_html_e( 'We keep your details private and only use them to deliver your solution.', 'solid-cement' ); ?></p>
                        </form>
                    </div>
                </div>
            </section>

            <section class="sotg-faq">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e( 'Questions? We have answers.', 'solid-cement' ); ?></h2>
                    <div class="sotg-faq-grid">
                        <article>
                            <h3><?php esc_html_e( 'What kinds of problems can you solve?', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'We specialize in practical, real-world challenges: tricky conversations, planning a project, mapping steps, and clarifying decisions. If we can't help, we'll tell you upfront.', 'solid-cement' ); ?></p>
                        </article>
                        <article>
                            <h3><?php esc_html_e( 'How do I receive my solution?', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'Your tailored response arrives via email with a clear action plan, scripts, or checklists — whatever fits your situation.', 'solid-cement' ); ?></p>
                        </article>
                        <article>
                            <h3><?php esc_html_e( 'What happens after my free solution?', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'Every request after your first is $50. You can always add the $20 express upgrade for a guaranteed reply within 30 minutes.', 'solid-cement' ); ?></p>
                        </article>
                        <article>
                            <h3><?php esc_html_e( 'Can I follow up with questions?', 'solid-cement' ); ?></h3>
                            <p><?php esc_html_e( 'Absolutely. Each solution includes a quick follow-up so you can move forward confidently.', 'solid-cement' ); ?></p>
                        </article>
                    </div>
                </div>
            </section>

            <?php if ( '' !== get_the_content() ) : ?>
                <section class="sotg-extra-content">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
