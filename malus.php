<?php
// Liste des malus possibles
$malus = [
    "Budget Cut: Skip your next turn.",
    "Lost Brief: Miss your next turn entirely.",
    "Misaligned Strategy: Swap places with the player at your left.",
    "Rushed Launch: The next question must be answered within 5 seconds.",
    "Storyteller Mode: You must speak like a dramatic narrator until your next turn.",
    "Movie Trailer Voice: Introduce every sentence with suspense.",
    "Epic Fantasy Tone: Speak as if you are in a medieval prophecy.",
    "Whisper Mode: You must speak in a whisper (or soft voice imitation) until next turn.",
    "Forbidden Words: You cannot say ‘brand’, ‘strategy’, or ‘card’ until your next turn.",
    "Hype Influencer Mode: Everything you say must be exaggerated and enthusiastic.",
    "Hands-Up Mode: Keep one hand raised until your next turn.",
    "Silent Clap: Silently applaud whenever someone wins a card.",
    "Brand glitch: You need to answer the next difficult level question.",
    "Mimic Master: Imitate the last player who spoke before your turn.",
];

$shortMalusWheel = [
    "Skip next turn.",
    "Miss next turn.",
    "Swap with left player.",
    "5-second answer limit.",
    "Speak dramatically.",
    "Use movie trailer voice.",
    "Speak in epic fantasy tone.",
    "Speak in a whisper.",
    "Avoid certain words.",
    "Exaggerate everything.",
    "Keep one hand raised.",
    "Silent applause only.",
    "Answer difficult question.",
    "Imitate last speaker.",
];

// Retourne la liste en JSON
header('Content-Type: application/json');
echo json_encode([
    "full" => $malus,
    "short" => $shortMalusWheel
]);