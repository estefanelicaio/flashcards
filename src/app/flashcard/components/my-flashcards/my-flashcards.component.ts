import { Component } from '@angular/core';
import { CategoryListComponent } from '../category-list/category-list.component';

@Component({
  selector: 'app-my-flashcards',
  standalone: true,
  imports: [CategoryListComponent],
  templateUrl: './my-flashcards.component.html',
  styleUrl: './my-flashcards.component.css'
})
export class MyFlashcardsComponent {

}
