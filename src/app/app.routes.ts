import { Routes } from '@angular/router';
import { HomeComponent } from './flashcards/home/home.component';
import { MyFlashcardsComponent } from './flashcards/components/my-flashcards/my-flashcards.component';
import { AnswerComponent } from './flashcards/pages/answer/answer.component';

export const routes: Routes = [
	{
		path: '',
		component: HomeComponent, pathMatch: 'full'
	},
	{
		path: 'my-flashcards',
		component: MyFlashcardsComponent,
	},
	{
		path: 'category/:id/answer',
		component: AnswerComponent
	}
];
