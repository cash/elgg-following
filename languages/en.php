<?php

$english = array(
	'friends' => "Following",
	'friends:yours' => "You are following",
	'friends:owned' => "Following %s",
	'friend:add' => "Follow this person",
	'friend:remove' => "Stop Following",
	'friends:add:successful' => "You are now following %s.",
	'friends:add:failure' => "Error. You could not follow %s.",
	'friends:remove:successful' => "You are no longer following %s.",
	'friends:remove:failure' => "Error. You cannot stop following %s.",
	'friends:none' => "This user isn't following anyone yet.",
	'friends:none:you' => "You aren't following anyone yet. Search for your interests to find people to follow.",
	'friends:none:found' => "No followers were found.",
	'friends:of:none' => "Nobody is following you yet.",
	'friends:of:none:you' => "Nobody is following you yet. Start adding content and fill in your profile to let people find you!",
	'friends:of' => "Followers",
	'friends:of:owned' => "People who are following %s",
	'friends:num_display' => "Number of people to display",
	'friends:collections' => "Member collections",
	'friends:collections:add' => "New collection",
	'friends:addfriends' => "Add to collection",
	'friends:collectionname' => "Collection name",
	'friends:collectionfriends' => "Members in collection",

	'friends:river:created' => "%s added the following widget.",
	'friends:river:updated' => "%s updated their following widget.",
	'friends:river:delete' => "%s removed their following widget.",
	'friends:river:add' => "%s is following someone.",

	'river:widget:title:friends' => "Following Activity",
	'river:relationship:friend' => "is now following",
	'river:widget:type' => "Which river would you like to display? One that shows your activity or one that shows the activity of those you are following?",
	'river:widgets:friends' => "Following",
	'river:widget:description:friends' => "Show the activity of those you follow",

	'thewire:friendsdesc' => 'This widget will show the latest from those you following on the wire',
	'thewire:friends' => 'Following activity on the wire',

	'activity:friends' => 'Following activity',
	'activity:person:friends' => '%s\'s following activity',

	'blog:user:friends' => "%s's following blogs",
	'blog:friends' => "Following blogs",
	'blog:yourfriends' => "Latest following blogs",

	'bookmarks:friends' => "Following bookmarks",
	'bookmarks:bookmarklet:description' =>
		"The bookmarks bookmarklet allows you to share any resource you find on the web with others, or just bookmark it for yourself. To use it, simply drag the following button to your browser's links bar:",

	'groups:invite' => "Invite someone",
	'groups:inviteto' => "Invite someone to '%s'",
	'groups:nofriends' => "You have no one left whom you are following that has not been invited to this group.",

	'feeds:friends' => "Following feeds",
	'feeds:friendsfeeds' => 'Following feeds',
	'feeds:friendswelcome' => "This page lets you view all of the feeds of those you are following who have made them available to their network. If any are available, you will see a list over on the righthand side. Click on a link to read the contents",

	'file:yours:friends' => "Following files",
	'file:friends' => "%s's following files",
	'file:friends:type:video' => "Following videos",
	'file:friends:type:document' => "Following documents",
	'file:friends:type:audio' => "Following audio",
	'file:friends:type:image' => "Following pictures",
	'file:friends:type:general' => "Following general files",

	'friends:all' => 'Everyone you are following',
	'notifications:subscriptions:collections:title' => 'Collection Notifications',
	'notifications:subscriptions:collections:description' => 'To toggle settings for members of your collections, click the icons below.',
	'notifications:subscriptions:collections:edit' => 'To edit your collections, click here.',
	'notifications:subscriptions:description' => 'To receive notifications when new content is created by the people you are following, find them below and select the notification method you would like to use.',

	'access:friends:label' => 'Following',

	'friend:newfriend:subject' => "%s is now following you",
	'friend:newfriend:body' => "%s is now following you on $CONFIG->sitename

To view their profile, click here:

%s

Please do not reply to this email.",

	'friends:invite' => "Invite someone",
	'invitefriends:introduction' => "To invite people to join you on this network, enter their email addresses below (one per line):",
	'invitefriends:success' => "Invitation success.",
	'invitefriends:failure' => "Invitation failure.",
	'invitefriends:email' => "You have been invited to join %s by %s. They included the following message:

%s

To join, click the following link:

	%s

You will automatically follow them when you create your account.",
);

add_translation("en", $english);
