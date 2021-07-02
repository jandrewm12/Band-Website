<?php

    // the following code was referenced from the AJAX Lecture
    sleep(0.5);
    $description = empty($_GET['description']) ? '' : $_GET['description'];

    switch($description) {
        case 'Another Life':
            $info = "<p>Song: Another Life <br><br>Album: Disguise<br><br>Lyrics:<br><br>If I can't let you go, will darkness divide?<br>
            For the fiction of love is the truth of our lies<br>
            We were playing for keeps but we both knew the cost<br>
            Now the only way out's in your heart shaped box<br><br>
            But I hate that it seems you were never enough<br>
            We were broken and bleeding but never gave up<br>
            And I hate that I made you the enemy<br>
            And I hate that your heart was the casualty<br>
            Now, I hate that I need you<br><br>
            As we rest here alone like notes on a page<br>
            The finest to compose could not play our pain<br>
            With a candle through time I could still see your ghost<br>
            But I can't close my eyes, for it<br>
            For it is there where you haunt me most<br>
            Where you haunt me most<br><br>
            I hate that it seems you were never enough<br>
            We were broken and bleeding, but never gave up<br>
            And I hope that I stain through your memory<br>
            As we echo through time in the melody<br>
            Now I hate that I need you<br><br>
            And I hear you now when you said it hurt<br>
            But it had to fall, fall apart to work<br>
            As I see you now in what's left of me<br>
            Is it too late to plead insanity?<br><br>
            'Cause I hate that it seems you were never enough<br>
            Yeah, we're broken and bleeding in the name of love<br>
            And I hope that we meet in another life<br>
            I hope that we meet in another life<br>
            I don't hate that I need you<br>
            (I don't hate that I need you)<br>
            I don't hate that I need you<br>
            (I don't hate that I need you)<br>
            I don't hate that I need you</p>";
            break;
        case 'Eternally Yours':
            $info = "<p>Song: Eternally Yours <br><br>Album: Graveyard Shift<br><br>Lyrics:<br><br>Blow the bridge to the past<br>
            Wipe the fingerprints<br>
            Melt your heart encased in wax<br>
            Steal it with a kiss<br><br>
            Our fate engraved<br>
            Scar enslaved<br>
            As we mutually destruct<br>
            Repose, my love, I've sinned enough<br>
            For the both of us<br><br>
            In the name of love<br><br>
            I'm ready to bury all of my bones<br>
            I'm ready to lie but say I won't<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To rot in this garden made of stones<br><br>
            Eternally yours<br>
            Eternally yours<br><br>
            I feed like you taught me and selflessly swallow<br>
            We coalesce in darkness, so selfishly hollow<br>
            Examine the wreckage<br>
            Writhing in tempo<br>
            Invisible anguish, casting a shadow<br><br>
            And in the name of love<br><br>
            I'm ready to bury all of my bones<br>
            I'm ready to lie but say I won't<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To rot in this garden made of stones<br><br>
            Eternally yours<br>
            Eternally yours<br><br>
            As we rest in pieces, though I know not your name<br>
            I would suffer forever to absolve all your pain<br><br>
            And in the name of love<br><br>
            I'm ready to bury all of my bones<br>
            I'm ready to lie but say I won't<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To rot in this garden made of stones<br><br>
            I'm ready to bleed to make amends<br>
            And sleep in this dirt we call our bed<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To fall and rewrite the bitter end<br><br>
            Eternally yours<br>
            Eternally yours<br>
            Eternally yours<br>
            Eternally yours<br>
            Eternally yours<br>
            I'm more than willing to rot in hell with you<br><br>
            I'm ready to bury all of my bones<br>
            I'm ready to lie but say I won't<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To rot in this garden made of stones<br><br>
            I'm ready to bleed to make amends<br>
            And sleep in this dirt we call our bed<br>
            So tell me your secrets<br>
            And join me in pieces<br>
            To fall and rewrite the bitter end<br><br>
            Eternally yours</p>";
            break;
        case 'Dark Passenger':
            $info = "<p>Song: Dark Passenger<br><br>Album: Reincarnate<br><br>Lyrics:<br><br>Bring me the head, rip the heart from my chest<br>
            'Cause the person that you knew, that you loved is dead<br>
            No cure, so tonight is the night<br>
            I'm going back on the deals with the devil I signed<br>
            Disappear into darkness<br><br>
            Somehow I will break and destroy you<br>
            And reveal what was hidden in plain view<br>
            This disguise was designed<br>
            To deflect what I couldn't show you<br><br>
            Shatter the glass, step away from the crash<br>
            I am slowly suffocating from the weight of my past<br>
            No cure for how I feel nothing inside<br>
            'Cause there's no black and no world dark enough to prescribe<br>
            (Born in blood)<br><br>
            Somehow I will break and destroy you<br>
            And reveal what was hidden in plain view<br>
            This disguise was designed<br>
            To deflect what I couldn't show you<br><br>
            I'm cursed right to the bone with apathy<br>
            A guest in my own home is how I feel<br>
            Dear sanity, I miss you so, come back to me<br>
            'There are no secrets in life<br>
            Just hidden truths beneath the surface'<br>
            (Time is the enemy)<br><br>
            When will I let (go)<br>
            Time is the enemy<br>
            I can't take the pain, there's blood in the drain<br>
            Now the urge is gettin' stronger and I'm going insane<br>
            There's a monster in my head it couldn't be any clearer<br>
            I am truly terrified by the man in the mirror<br><br>
            Somehow I will break and destroy you<br>
            And reveal what was hidden in plain view<br>
            This disguise was designed<br>
            To deflect what I couldn't show you<br><br>
            To the dearly departed,<br>
            I'll devour the fate you can't undo<br>
            Disappear into darkness<br>
            Born in blood, I'm not like you</p>";
            break;
        case 'Creatures X':
            $info = "<p>Song: Creatures X<br><br>Single: Creatures X<br><br>Lyrics:<br><br>We sung our lungs out to reach you<br>
            Spilling our guts on the pavement that we roamed<br>
            (Far from home)<br>
            This is my life's work<br>
            Forever grateful that you made your hearts our home<br><br>
            Cursed, damned and broken<br>
            With the sum of my failures all declared in a moment<br>
            Cursed, damned and broken<br>
            Lost<br>
            Sick<br>
            And left unspoken<br>
            I will take this to the grave<br><br>
            I was waiting for my chance to find<br>
            The life I was chasing<br>
            My god, what have I become<br>
            A decade in the making?<br><br>
            I wore my shame on my sleeve<br>
            And put my pain on display for all to see<br>
            This is my life's work<br>
            What felt like fire but without a thing to burn<br>
            Turned into a scorched earth<br><br>
            Step through<br>
            The door<br>
            Ten years<br>
            Ten more<br><br>
            I was waiting for my chance to find<br>
            The life I was chasing<br>
            My god, what have I become?<br>
            A decade in the making?<br><br>
            I'll take this to the grave<br><br>
            There's always a struggle you don't see (don't see)<br>
            Living in fear I proved myself to me<br>
            Forever stepping through the door to the unknown<br>
            Ten years<br>
            Ten more<br><br>
            I was waiting for my chance<br>
            I was waiting for my chance to find<br>
            The life I was chasing<br>
            My god, what have I become?<br><br>
            I'll take this to my grave (we were waiting)<br>
            With no stain washed away (for our chance to find a life)<br>
            I'll take this to my grave (of salvation)<br>
            With no stain washed away (my god, what have we become)<br><br>
            Become<br>
            I'll take this to my grave</p>";
            break;
        case 'Creatures':
            $info = "<p>Song: Creatures <br><br>Album: Creatures<br><br>Lyrics:<br><br>I fall<br>
            This is the end of you<br>
            This is the end of you<br>
            Whispers are their weakness<br>
            Their weakness<br><br>
            Everyday I must practice<br>
            To fake this smile on my face<br>
            It's all the rain that's putting me to sleep<br>
            It's all the rain that's putting me to sleep<br><br>
            I'll let the blood tell the truth tonight, this is my life's work<br>
            11 tracks is not enough to tell you how I've died inside<br>
            And love is lost like words<br>
            11 tracks is not enough<br><br>
            In spiders eyes a man becomes a fly<br>
            In prolonged silence, we all stand defiled<br>
            We fall in line with the atrophy of life<br>
            The calm before the storm is a defeating silence<br>
            I've given my all to this valley of despair<br><br>
            We are the damned, the cursed and the broken<br>
            There's so much more inside us<br>
            We are the lost, the sick and unspoken<br>
            There's so much more inside us<br><br>
            I'm drowning in an ocean of the tears that I've cried<br>
            I tried to drown my sorrows...<br>
            Instead they're all drowning me<br>
            I tried to drown my sorrows...<br>
            Instead they're all drowning me</p>";
            break;
        default:
            $info = '<p>Something went wrong...</p>';
            break;
    }

    print $info;
?>