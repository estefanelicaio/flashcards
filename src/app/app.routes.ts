import { Routes } from '@angular/router';
import { HomeComponent } from './flashcard/home/home.component';
import { MyFlashcardsComponent } from './flashcard/components/my-flashcards/my-flashcards.component';

export const routes: Routes = [
	{ path: '', component: HomeComponent, pathMatch: 'full' },
	{ path: 'my-flashcards', component: MyFlashcardsComponent },
];
