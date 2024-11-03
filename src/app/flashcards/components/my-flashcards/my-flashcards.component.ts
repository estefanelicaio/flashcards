import { Component, Output, signal } from '@angular/core';
import { CategoryListComponent } from '../category-list/category-list.component';
import { AnswerComponent } from '../../pages/answer/answer.component';
import { Flashcard } from '../../interfaces/flashcard';
import { Router, RouterLink, RouterOutlet } from '@angular/router';
import { Category } from '../../interfaces/category';

@Component({
  selector: 'app-my-flashcards',
  standalone: true,
  imports: [CategoryListComponent, AnswerComponent, RouterLink, RouterOutlet],
  templateUrl: './my-flashcards.component.html',
  styleUrl: './my-flashcards.component.css'
})
export class MyFlashcardsComponent {

}
